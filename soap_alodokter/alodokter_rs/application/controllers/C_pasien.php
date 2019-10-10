<?php
Class C_pasien extends CI_Controller{

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->load->model('M_pasien');
		$this->load->library(array('session'));
	}

	// menampilkan data rumahsakit
	function index(){
		$data['pasien'] = $this->M_pasien->getTable();
		$this->load->view('pasien', $data);
	}

}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */