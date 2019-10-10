<?php
require APPPATH . '/libraries/REST_Controller.php';
class C_rumahsakit extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}

	// show data rumah_sakit
	function index_get() {
		$id_rs = $this->get('id_rs');
		if ($id_rs == '') {
			$rumah_sakit = $this->db->get('rumah_sakit')->result();
		} else {
			$this->db->where('id_rs', $id_rs);
			$rumah_sakit = $this->db->get('rumah_sakit')->result();
		}
		$this->response($rumah_sakit, 200);
	}

	// insert new data to rumah_sakit
	function index_post() {
		$data = array(
					'id_rs'		=> $this->post('id_rs'),
					'nama_rs'		=> $this->post('nama_rs'),
					'alamat_rs'=> $this->post('alamat_rs'),
					'tlp_rs'	=> $this->post('tlp_rs'));
		$insert = $this->db->insert('rumah_sakit', $data);
		if ($insert) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}

	// insert new data to akun
	function simple_post() {
		$data = array(
					'username'		=> $this->post('username'),
					'password'		=> $this->post('password'),
					'nama'			=> $this->post('nama'),
					'jk'			=> $this->post('jk'),
					'tgl_lahir'		=> $this->post('tgl_lahir'),
					'alamat'		=> $this->post('alamat'));
		$insert = $this->db->insert('akun', $data);
		if ($insert) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}

	// update data rumah_sakit
	function index_put() {
		$id_rs = $this->put('id_rs');
		$data = array(
					'id_rs'		=> $this->put('id_rs'),
					'nama_rs'		=> $this->put('nama_rs'),
					'alamat_rs'=> $this->put('alamat_rs'),
					'tlp_rs'	=> $this->put('tlp_rs'));
		$this->db->where('id_rs', $id_rs);
		$update = $this->db->update('rumah_sakit', $data);

		if ($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}

	// delete data rumah_sakit
	function index_delete() {
		$id_rs = $this->delete('id_rs');
		$this->db->where('id_rs', $id_rs);
		$delete = $this->db->delete('rumah_sakit');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}

}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */