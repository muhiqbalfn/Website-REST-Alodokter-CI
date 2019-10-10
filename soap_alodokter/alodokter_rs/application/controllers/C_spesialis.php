<?php
Class C_spesialis extends CI_Controller{

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->load->model('M_spesialis');
		$this->load->library(array('session'));
	}

	// menampilkan data rumahsakit
	function index(){
		$data['spesialis'] = $this->M_spesialis->getTable();
		$this->load->view('spesialis', $data);

		// $params = array('id_rs'=> 'RS003');
		// $data['pesan_rs'] = json_decode($this->curl->simple_get($this->API.'/C_idrspesan',$params));
		// $this->load->view('rumahsakit/listspesialis', $data);

		// $data['pesan_rs'] = json_decode($this->curl->simple_get($this->API.'/C_spesialis',$params));
		// $this->load->view('rumahsakit/listspesialis', $data);
	}

}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */