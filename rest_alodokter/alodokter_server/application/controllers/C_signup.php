<?php

require APPPATH . '/libraries/REST_Controller.php';
class C_signup extends REST_Controller {

	function __construct($config = 'rest') {
		parent::__construct($config);
	}

	/*// show data pesan_rs
	function index_get() {
		$id_pesanrs = $this->get('id_pesanrs');
		if ($id_pesanrs == '') {
			$pesan_rs = $this->db->get('pesan_rs')->result();
		} else {
			$this->db->where('id_pesanrs', $id_pesanrs);
			$pesan_rs = $this->db->get('pesan_rs')->result();
		}
		$this->response($pesan_rs, 200);
	}

	// insert new data to pesan_rs
	function index_post() {
		$data = array(
			'id_pesanrs'	=> $this->post('id_pesanrs'),
			'id_rs'		=> $this->post('id_rs'),
			'username' => $this->post('username'),
			'nama'		=> $this->post('nama'),
			'tgl_pesan'=> $this->post('tgl_pesan'),
			'waktu_pesan'	=> $this->post('waktu_pesan'));
		$insert = $this->db->insert('pesan_rs', $data);
		if ($insert) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}*/

	// insert new data to akun
	function index_post() {
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

	/*// update data pesan_rs
	function index_put() {
		$id_pesanrs = $this->put('id_pesanrs');
		$data = array(
			'id_pesanrs'	=> $this->put('id_pesanrs'),
			'id_rs'		=> $this->put('id_rs'),
			'username' => $this->put('username'),
			'nama'		=> $this->put('nama'),
			'tgl_pesan'=> $this->put('tgl_pesan'),
			'waktu_pesan'	=> $this->put('waktu_pesan'));
		$this->db->where('id_pesanrs', $id_pesanrs);
		$update = $this->db->update('pesan_rs', $data);

		if ($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}

	// delete data pesan_rs
	function index_delete() {
		$id_pesanrs = $this->delete('id_pesanrs');
		$this->db->where('id_pesanrs', $id_pesanrs);
		$delete = $this->db->delete('pesan_rs');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}*/

}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */