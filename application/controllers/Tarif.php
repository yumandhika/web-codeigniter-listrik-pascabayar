<?php
class Tarif extends CI_Controller {
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
            $data['title'] = "Tambah Tarif";
            $data['tarifs'] = json_decode($this->curl->simple_get($this->API.'tarifs'));
            $data['x'] = count($data['tarifs'])+1;
            $this->load->view('templates/header',$data);
            $this->load->view('tarif/index.php',$data);
            $this->load->view('templates/footer');
        }
        public function create(){
            $data['title'] = "Tambah Tarif";
            if(isset($_POST['submit'])){
                $data = array(
                    'id_tarif' =>  $this->input->post('id_tarif'),
                    'daya' =>  $this->input->post('daya'),
                    'tarifperkwh' =>  $this->input->post('tarifperkwh'),
                );
                $insert =  $this->curl->simple_post($this->API.'addTarif', $data, array(CURLOPT_BUFFERSIZE => 10)); 
                if($insert)
                {
                    $this->session->set_flashdata('hasil','Insert Data Berhasil');
                }else
                {
                   $this->session->set_flashdata('hasil','Insert Data Gagal'.$data);
                }
                redirect('tarif');
            }else{
                $data['tarifs'] = json_decode($this->curl->simple_get($this->API.'tarifs'));
                $data['title'] = "Tambah Tarif";
                $data['x'] = count($data['tarifs'])+1;
                $this->load->view('templates/header');
                $this->load->view('tarif/index.php',$data);
                $this->load->view('templates/footer');
            }
        }

        public function edit($id)
        {
            $data['title'] = "Edit Tarif";
            $data['tarif'] = json_decode($this->curl->simple_get($this->API.'getTarif?id_tarif='.$id),true);
            $this->load->view('templates/header', $data);
            $this->load->view('tarif/edit.php',$data);
            $this->load->view('templates/footer', $data);
        }

        public function changeTarif(){
            if(isset($_POST['submit'])){
                $data = array(
                    'id_tarif' =>  $this->input->post('id_tarif'),
                    'daya' =>  $this->input->post('daya'),
                    'tarifperkwh' =>  $this->input->post('tarifperkwh'),
                );
                $insert =  $this->curl->simple_put($this->API.'editTarif', $data, array(CURLOPT_BUFFERSIZE => 10)); 
                if($insert)
                {
                    $this->session->set_flashdata('hasil','Update Data Berhasil');
                }else
                {
                   $this->session->set_flashdata('hasil','Update Data Gagal'.$data);
                }
                redirect('tarif');
            }else{
                $data['tarifs'] = json_decode($this->curl->simple_get($this->API.'tarifs'));
                $data['x'] = count($data['tarifs'])+1;
                $this->load->view('templates/header');
                $this->load->view('tarif/index.php',$data);
                $this->load->view('templates/footer');
                }
            if(isset($_POST['hapus'])){
                $id = $this->input->post('id_tarif');
                if(empty($id)){
                    redirect('tarif');
                }else{
                    $delete =  $this->curl->simple_delete($this->API.'deleteTarif', array('id_tarif'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
                    if($delete)
                    {
                        $this->session->set_flashdata('hasil','Delete Data Berhasil');
                    }else
                    {
                       $this->session->set_flashdata('hasil','Delete Data Gagal');
                    }
                    redirect('tarif');
                }
            }else{
            }
        }
}