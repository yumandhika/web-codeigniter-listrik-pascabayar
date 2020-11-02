<?php
class Admin extends CI_Controller {
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
                    $id_saldo = count(json_decode($this->curl->simple_get($this->API.'rowRekening'))) + 1;
                    $data = array(
                        'id_saldo' =>  $id_saldo,
                        'id_admin' =>  $this->input->post('id_admin'),
                        'saldo' =>  0,
                    );
                    $insert =  $this->curl->simple_post($this->API.'addRekening', $data, array(CURLOPT_BUFFERSIZE => 10)); 
                    if($insert){
                        $this->session->set_flashdata('hasil','Insert Data Berhasil');
                    }else{
                        $this->session->set_flashdata('hasil','Insert Data Gagal'.$data);
                    }
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
            $data['title'] = "Edit Admin";
            $data['admin'] = json_decode($this->curl->simple_get($this->API.'getAdmin?id_admin='.$id),true);
            $this->load->view('templates/header', $data);
            $this->load->view('admin/edit.php',$data);
            $this->load->view('templates/footer', $data);
        }

        public function changeAdmin(){
            if(isset($_POST['submit'])){
                $data = array(
                    'id_admin' =>  $this->input->post('id_admin'),
                    'username' =>  $this->input->post('username'),
                    'password' =>  $this->input->post('password'),
                    'nama_admin' =>  $this->input->post('nama_admin'),
                    'id_level' =>  $this->input->post('id_level')
                );
                $insert =  $this->curl->simple_put($this->API.'editAdmin', $data, array(CURLOPT_BUFFERSIZE => 10)); 
                if($insert)
                {
                    $this->session->set_flashdata('hasil','Update Data Berhasil');
                }else
                {
                   $this->session->set_flashdata('hasil','Update Data Gagal'.$data);
                }
                redirect('admin');
            }else{
                $data['admins'] = json_decode($this->curl->simple_get($this->API.'admins'));
                $data['x'] = count($data['admins'])+1;
                $this->load->view('templates/header');
                $this->load->view('admin/index.php',$data);
                $this->load->view('templates/footer');
                }
            if(isset($_POST['hapus'])){
                $id = $this->input->post('id_admin');
                if(empty($id)){
                    redirect('admin');
                }else{
                    $delete =  $this->curl->simple_delete($this->API.'deleteAdmin', array('id_admin'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
                    if($delete)
                    {
                        $this->session->set_flashdata('hasil','Delete Data Berhasil');
                    }else
                    {
                       $this->session->set_flashdata('hasil','Delete Data Gagal');
                    }
                    redirect('admin');
                }
            }else{
            }
        }
}