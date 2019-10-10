<?php
Class C_signup extends CI_Controller{

	var $API ="";
	function __construct() {
		parent::__construct();
		$this->API="http://localhost/enterprise/rest_alodokter/alodokter_server/index.php";
		$this->load->model('M_pesanrs');
		$this->load->library(array('session'));
	}

	//====================================================================================

	public function sign(){
		$this->load->view('signup');
	}
	public function signup(){
		if(isset($_POST['submit'])){
			$data = array(
				'username'=> $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'tgl_lahir'=> $this->input->post('tgl_lahir'),
				'alamat' => $this->input->post('alamat'));
			
			$insert = $this->curl->simple_post($this->API.'/C_signup', $data,
				array(CURLOPT_BUFFERSIZE => 10));
			if($insert)
			{
				$this->session->set_flashdata('hasil','Insert Data Berhasil');
			}else
			{
				$this->session->set_flashdata('hasil','Insert Data Gagal');
			}
			$this->load->view('login');
		}else{
			redirect('sign','refresh');
		}
	}
}