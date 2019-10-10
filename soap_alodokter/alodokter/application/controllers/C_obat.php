<?php
Class C_obat extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('M_pesanrs');
		$this->load->library(array('session'));
	}

 	// menampilkan data obat
	function index(){
		$data['obat'] = $this->M_pesanrs->getObat();
		$this->load->view('obat', $data);
	}

}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */