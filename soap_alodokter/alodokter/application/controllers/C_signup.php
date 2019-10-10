<?php
Class C_signup extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('M_pesanrs');
		$this->load->library(array('session'));
	}

	//====================================================================================
	public function sign(){
		$this->load->view('signup');
	}
	public function signup(){
		$this->M_pesanrs->daftar();
			redirect(base_url('C_login'));
	}
}