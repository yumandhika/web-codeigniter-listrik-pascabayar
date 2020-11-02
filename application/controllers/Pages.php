<?php
class Pages extends CI_Controller {
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

        public function view($page = 'home')
        {
                if(empty($this->session->userdata('adminSession'))){
                        redirect('/');
                }
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
            $data['pelanggan'] = json_decode($this->curl->simple_get($this->API.'pelanggan'));
            $data['admins'] = json_decode($this->curl->simple_get($this->API.'admins'));
            $data['penggunaans'] = json_decode($this->curl->simple_get($this->API.'penggunaans'));
            $data['tagihans'] = json_decode($this->curl->simple_get($this->API.'tagihans'));
            $data['pembayarans'] = json_decode($this->curl->simple_get($this->API.'pembayarans'));
            $data['tarifs'] = json_decode($this->curl->simple_get($this->API.'tarifs'));
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $data['adminSession'] = $this->session->userdata('adminSession');
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }

        public function index(){
                $this->load->view('pages/login.php');
        }

        public function login(){
                        $data = array(
                            'username' =>  $this->input->post('username'),
                            'password' =>  $this->input->post('password')
                        );
                        $login =  json_decode($this->curl->simple_post($this->API.'loginAdmin', $data, array(CURLOPT_BUFFERSIZE => 10))); 
                        if($login)
                        {
                                foreach($login as $namalevel){
                                        if($namalevel->id_level == 1){
                                                $this->session->set_userdata('adminSession',$login);
                                                $this->session->set_flashdata('hasil','Login Data Berhasil');
                                                $this->view('home');
                                        }else if($namalevel->id_level == 2){
                                                $data['title'] = 'bangkir home'; // Capitalize the first letter
                                                $this->session->set_userdata('adminSession',$login);
                                                $this->session->set_flashdata('hasil','Login Data Berhasil');
                                                $this->load->view('templates/header_bank',$data);
                                                $this->load->view('bank/index.php',$data);
                                                $this->load->view('templates/footer_bank',$data);
                                        }else if($namalevel->id_level == 3){
                                                $data['title'] = 'PPOB Listrik'; // Capitalize the first letter
                                                $this->session->set_userdata('adminSession',$login);
                                                $this->session->set_flashdata('hasil','Login Data Berhasil');
                                                $this->load->view('templates/header_ppob',$data);
                                                $this->load->view('ppob/index.php',$data);
                                                $this->load->view('templates/footer_ppob',$data);
                                        }
                                }
                        }else
                        {
                                $this->session->set_flashdata('hasil','Login Data Gagal'.$data);
                                redirect('/');
                        }
        }

        public function logout(){
                $this->session->sess_destroy();
                redirect('/');
        }

        public function cetak_pembayaran()
        {
            $data['cetak_pembayaran'] = json_decode($this->curl->simple_get($this->API.'pembayarans'));
            $this->load->view('cetak_pembayaran', $data);
        } 
}