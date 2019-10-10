<?php
Class C_rumahsakit extends CI_Controller{

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->API="http://localhost/ENTERPRISE/rest_alodokter/alodokter_server/index.php";
	}

 // menampilkan data rumahsakit
	function index(){
		$data['rumahsakit'] = json_decode($this->curl->simple_get($this->API.'/C_rumahsakit'));
		$this->load->view('rsView', $data);
	}

}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */