<?php
class Penggunaan extends CI_Controller {
        var $API = "";
        
        function __construct() {
                parent::__construct();
                $this->API="http://localhost:8080/listrik-pascabayar-api/api/";
                $this->load->library('session');
                $this->load->library('curl');
                $this->load->helper('form');
                $this->load->helper('url');
        }
        public function index(){
            $data['title'] = "Tambah Admin";
            $data['admins'] = json_decode($this->curl->simple_get($this->API.'admins'));
            $data['x'] = count($data['admins'])+1;
            $this->load->view('templates/header',$data);
            $this->load->view('admin/index.php',$data);
            $this->load->view('templates/footer');
        }
        public function create(){
            $data['title'] = "Tambah Admin";
            if(isset($_POST['submit'])){
                $data = array(
                    'id_admin' =>  $this->input->post('id_admin'),
                    'username' =>  $this->input->post('username'),
                    'password' =>  $this->input->post('password'),
                    'nama_admin' =>  $this->input->post('nama_admin'),
                    'id_level' =>  $this->input->post('id_level')
                );
                $insert =  $this->curl->simple_post($this->API.'addAdmin', $data, array(CURLOPT_BUFFERSIZE => 10)); 
                if($insert)
                {
                    $this->session->set_flashdata('hasil','Insert Data Berhasil');
                }else
                {
                   $this->session->set_flashdata('hasil','Insert Data Gagal'.$data);
                }
                redirect('admin');
            }else{
                $data['admins'] = json_decode($this->curl->simple_get($this->API.'admins'));
                $data['title'] = "Tambah Admin";
                $data['x'] = count($data['admins'])+1;
                $this->load->view('templates/header');
                $this->load->view('admin/index.php',$data);
                $this->load->view('templates/footer');
            }
        }

        public function edit($id)
        {
            $data['title'] = "Edit Penggunaan";
            $data['penggunaan'] = json_decode($this->curl->simple_get($this->API.'getPenggunaan?id_penggunaan='.$id),true);
            $this->load->view('templates/header', $data);
            $this->load->view('penggunaan/edit.php',$data);
            $this->load->view('templates/footer', $data);
        }

        public function changePenggunaan(){
            if(isset($_POST['submit'])){
                $data = array(
                    'id_pelanggan' =>  $this->input->post('id_pelanggan'),
                    'meter_awal' =>  $this->input->post('meter_awal'),
                    'meter_akhir' =>  $this->input->post('meter_akhir'),
                    'tanggal' => $this->input->post('tanggal'),
                );
                $insert =  $this->curl->simple_put($this->API.'editPenggunaan',$data, array(CURLOPT_BUFFERSIZE => 10)); 
                if($insert)
                {
                    $data = array(
                        'id_pelanggan' =>  $this->input->post('id_pelanggan'),
                        'jumlah_meter' =>  intval($this->input->post('meter_akhir'))-intval($this->input->post('meter_awal')),
                        'status' =>  "belum bayar",
                        'tanggal' => $this->input->post('tanggal'),
                    );
                    $insert =  $this->curl->simple_put($this->API.'editTagihan',$data, array(CURLOPT_BUFFERSIZE => 10)); 
                    if($insert){
                        $this->session->set_flashdata('hasil','Update Data Berhasil'.$data['tanggal']);
                    }else{
                        $this->session->set_flashdata('hasil','Update Data Gagal'.$data);
                    }
                }else
                {
                   $this->session->set_flashdata('hasil','Update Data Gagal'.$data);
                }
                redirect('penggunaan');
            }else{
                redirect('penggunaan');
                }
            if(isset($_POST['hapus'])){
                redirect('penggunaan');
            }else{
            }
        }

        public function tambahTagihan(){
            if(isset($_POST['submit'])){
            $data['title'] = "Tambah Tagihan";
            $data = array(
                'id_pelanggan' =>  $this->input->post('id_pelanggan'),
                'meter_awal' =>  $this->input->post('meter_akhir'),
                'meter_akhir' =>  $this->input->post('meter_akhir'),
                'tanggal' => $this->input->post('tanggal'),
            );
            $insert =  $this->curl->simple_put($this->API.'editPenggunaan',$data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert){
                $data = array(
                    'id_tagihan' => 0,
                    'status' => '',
                    'id_penggunaan' =>  $this->input->post('id_penggunaan'),
                    'id_pelanggan' =>  $this->input->post('id_pelanggan'),
                    'tanggal' =>  $this->input->post('tanggal'),
                    'meter_awal' => $this->input->post('meter_awal'),
                    'meter_akhir' => $this->input->post('meter_akhir'),
                    'jumlah_meter' =>  strVal(intval($this->input->post('meter_akhir'))-intval($this->input->post('meter_awal'))),
                );
                $insert =  $this->curl->simple_post($this->API.'tambahTagihan',$data, array(CURLOPT_BUFFERSIZE => 10)); 
                if($insert)
                {
                    $this->session->set_flashdata('hasil','Insert Data Berhasil');
                }else
                {
                   $this->session->set_flashdata('hasil','Insert Data Gagal'.$data);
                }
            }else{
               $this->session->set_flashdata('hasil','Insert Data Gagal'.$data);
            }
            redirect('penggunaan');
            }
            else{
            redirect('penggunaan');
            }
            if(isset($_POST['hapus'])){
                redirect('penggunaan');
            }else{
            }
        }

        public function bayar($id){
            $data['title'] = "Payment";
            $data['tagihanbayar'] =  json_decode($this->curl->simple_get($this->API.'getBayarTagihan?id_tagihan='.$id),true);
            if($data['tagihanbayar'])
            {
                foreach($this->session->userdata('adminSession') as $x){
                    $data['id_admin'] = $x->id_admin;
                    $this->load->view('templates/header', $data);
                    $this->load->view('pembayaran/payment.php',$data);
                    $this->load->view('templates/footer', $data);
                }
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
               redirect('tagihan');
            }
        }
}