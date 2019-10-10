<?php
Class C_dokter extends CI_Controller{

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->load->model('M_dokter');
		$this->load->library(array('session'));
	}

	// menampilkan data rumahsakit
	function index(){
		$data['dokter'] = $this->M_dokter->getTable();
		$this->load->view('dokter', $data);
	}

}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */