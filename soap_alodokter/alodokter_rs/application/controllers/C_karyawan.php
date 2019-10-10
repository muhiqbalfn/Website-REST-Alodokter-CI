<?php
Class C_karyawan extends CI_Controller{

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->load->model('M_karyawan');
		$this->load->library(array('session'));
	}

	// menampilkan data rumahsakit
	function index(){
		$data['karyawan'] = $this->M_karyawan->getTable();
		$this->load->view('karyawan', $data);
	}

}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */