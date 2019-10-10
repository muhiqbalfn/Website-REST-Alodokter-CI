<?php
Class C_penyakit extends CI_Controller{

	function __construct() {
		parent::__construct();
		$this->load->model('M_pesanrs');
		$this->load->library(array('session'));
	}

 	// menampilkan data obat
	function index(){
		$data['penyakit'] = $this->M_pesanrs->getPenyakit();
		$this->load->view('penyakit', $data);
	}

}

/* End of file penyakit.php */
/* Location: ./application/controllers/penyakit.php */