<?php

class Ppob extends CI_Controller {
    var $API = "";
        
    function __construct() {
            parent::__construct();
            $this->API="http://localhost:8080/listrik-pascabayar-api/api/";
            $this->load->library('session');
            $this->load->library('curl');
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->library('Pdf');
    }

	public function index()
	{
        $data['title'] = 'PPOB Listrik'; // Capitalize the first letter
        $this->load->view('templates/header_ppob',$data);
        $this->load->view('ppob/index.php',$data);
        $this->load->view('templates/footer_ppob',$data);
    }
    public function tagihan(){
        $data['tagihans'] = json_decode($this->curl->simple_get($this->API.'tagihans'));
        $data['title'] = 'Tagihan'; // Capitalize the first letter
        $this->load->view('templates/header_ppob',$data);
        $this->load->view('ppob/tagihan.php',$data);
        $this->load->view('templates/footer_ppob',$data);
    }
    public function bayar($id){
        $data['title'] = "Payment";
        $data['tagihanbayar'] =  json_decode($this->curl->simple_get($this->API.'getBayarTagihan?id_tagihan='.$id),true);
        if($data['tagihanbayar'])
        {
            foreach($this->session->userdata('adminSession') as $x){
                $data['id_admin'] = $x->id_admin;
                $this->load->view('templates/header_ppob', $data);
                $this->load->view('ppob/payment.php',$data);
                $this->load->view('templates/footer_ppob', $data);
            }
        }else
        {
           $this->session->set_flashdata('hasil','Insert Data Gagal');
           redirect('ppob/tagihan');
        }
    }
    public function confirmpayment(){
        $data['title'] = "confirm payment";
        if(isset($_POST['submit'])){
                $data = array(
                    'id_tagihan' => $this->input->post('id_tagihan'),
                    'status' =>  "sudah bayar",
                );
                $insert =  $this->curl->simple_put($this->API.'editTagihan',$data, array(CURLOPT_BUFFERSIZE => 10)); 
                if($insert){
                    $data['pembayaran'] = json_decode($this->curl->simple_get($this->API.'pembayarans'));
                    $x = count($data['pembayaran'])+1;
                    $data = array(
                        'id_pembayaran' => $x,
                        'id_admin' => $this->input->post('id_admin'),
                        'id_pelanggan' =>  $this->input->post('id_pelanggan'),
                        'id_tagihan' =>  $this->input->post('id_tagihan'),
                        'biaya_admin' =>  $this->input->post('biaya_admin'),
                        'tanggal' => $this->input->post('tanggal'),
                        'total_bayar' =>  $this->input->post('total_bayar'),
                    );
                    $insert =  $this->curl->simple_post($this->API.'addPembayaran',$data, array(CURLOPT_BUFFERSIZE => 10)); 
                    if($insert){

                        $data = array(
                            'id_saldo' => $this->input->post('id_saldo'),
                            'saldo' => intval($this->input->post('saldo'))-intval($this->input->post('total_bayar')),
                        );
                        $insert =  $this->curl->simple_put($this->API.'editSaldo', $data, array(CURLOPT_BUFFERSIZE => 10)); 
                        
                        if($insert){
                            $data['struk'] = array(
                                'id_pembayaran' => $x,
                                'id_admin' => $this->input->post('id_admin'),
                                'id_pelanggan' =>  $this->input->post('id_pelanggan'),
                                'id_tagihan' =>  $this->input->post('id_tagihan'),
                                'biaya_admin' =>  $this->input->post('biaya_admin'),
                                'tanggal' => $this->input->post('tanggal'),
                                'total_bayar' =>  $this->input->post('total_bayar'),
                                'nama_pelanggan' =>  $this->input->post('nama_pelanggan'),
                                'nomor_kwh' =>  $this->input->post('nomor_kwh'),
                                'daya' =>  $this->input->post('daya'),
                                'tarifperkwh' =>  $this->input->post('tarifperkwh'),
                                'alamat' =>  $this->input->post('alamat'),
                                'meter_awal' =>  $this->input->post('meter_awal'),
                                'meter_akhir' =>  $this->input->post('meter_akhir'),
                                'jumlah_meter' =>  $this->input->post('jumlah_meter'),
                            );
                            $this->load->view('cetak_struk',$data);
                        }else{
                            $this->session->set_flashdata('hasil','Update Data Gagal'.$data);
                            redirect('ppob/tagihan');
                        }
                    }else{
                        $this->session->set_flashdata('hasil','Update Data Gagal'.$data);
                        redirect('ppob/tagihan');
                    }
                }else{
                    $this->session->set_flashdata('hasil','Update Data Gagal'.$data);
                    redirect('ppob/tagihan');
                }
        }else{
            redirect('ppob/tagihan');
            }
    }
}
