<?php
Class C_tindakanmedis extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('M_pesanrs');
		$this->load->library(array('session'));
	}

 	// menampilkan data obat
	function index(){
		$data['tindakan'] = $this->M_pesanrs->getTindakanMedis();
		$this->load->view('tindakanmedis', $data);
	}

}

/* End of file tindakanMedis.php */
/* Location: ./application/controllers/tindakanMedis.php */