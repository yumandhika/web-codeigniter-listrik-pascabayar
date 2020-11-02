<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

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
			$data['title'] = 'bangkir home'; // Capitalize the first letter
			$data['admins'] = json_decode($this->curl->simple_get($this->API.'adminsppob'));
		    $this->load->view('templates/header_bank',$data);
			$this->load->view('bank/adminppob.php',$data);
			$this->load->view('templates/footer_bank',$data);
	}
	public function tambahsaldo($id)
	{
		$data['admin'] = json_decode($this->curl->simple_get($this->API.'getRekening?id_saldo='.$id));
		$data['title'] = "tambah saldo Admin";
		$this->load->view('templates/header_bank', $data);
		$this->load->view('bank/tambahsaldo.php',$data);
		$this->load->view('templates/footer_bank', $data);
	}
	public function updatesaldo()
	{
		if(isset($_POST['submit'])){
			$data['title'] = "tambah saldo Admin";
			$data = array(
				'id_saldo' => $this->input->post('id_saldo'),
            	'saldo' => intval($this->input->post('saldoawal'))+intval($this->input->post('tambahsaldo')),
			);
			$insert =  $this->curl->simple_put($this->API.'editSaldo', $data, array(CURLOPT_BUFFERSIZE => 10)); 
			if($insert){
				redirect('bank/adminppob');
			}else{
				redirect('bank/adminppob');
			}
		}else{
			redirect('bank/adminppob');
		}
		if(isset($_POST['hapus'])){
			redirect('bank/adminppob');
		}else{
		}
	}
}
