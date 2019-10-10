<?php

require APPPATH . '/libraries/REST_Controller.php';

class C_idrspesan extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}

	// show data pesan_rs
	function index_get() {
		$id_rs = $this->get('id_rs');
		if ($id_rs == '') {
			$pesan_rs = $this->db->get('pesan_rs')->result();
		} else {
			$this->db->where('id_rs', $id_rs);
			$pesan_rs = $this->db->get('pesan_rs')->result();
		}
		$this->response($pesan_rs, 200);
	}

}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */