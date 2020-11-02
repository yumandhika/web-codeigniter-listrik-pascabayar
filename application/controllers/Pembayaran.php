<?php
class Pembayaran extends CI_Controller {
        var $API = "";
        
        function __construct() {
                parent::__construct();
                $this->API="http://localhost:8080/listrik-pascabayar-api/api/";
                $this->load->library('session');
                $this->load->library('curl');
                $this->load->helper('form');
                $this->load->helper('url');
        }
        public function payment(){
            $data['title'] = "Payment";
            $nomorkwh = $this->input->get('nomor_kwh');
            $data['tagihanbayar'] =  json_decode($this->curl->simple_get($this->API.'getTagihanBayar?nomor_kwh='.$nomorkwh),true);
            if($data['tagihanbayar'])
            {
                foreach($this->session->userdata('adminSession') as $x){
                    $data['id_admin'] = $x->id_admin;
                }
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
                $this->load->view('templates/header', $data);
                $this->load->view('pembayaran/payment.php',$data);
                $this->load->view('templates/footer', $data);
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
               redirect('bayar');
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
                    }else{
                        $this->session->set_flashdata('hasil','Update Data Gagal'.$data);
                    }
                redirect('tagihan');
            }else{
                redirect('tagihan');
                }
        }
}