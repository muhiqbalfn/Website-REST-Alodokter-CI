<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Level extends REST_Controller {
	
	function __construct($config = 'rest') {
		parent::__construct($config);
		$this->load->database();
	}
 //Menampilkan data typelaundry
	function index_get() {
		$id = $this->get('id');
		if ($id == '') {
			$Level = $this->db->get('level')->result();
		} else {
			$this->db->where('id', $id);
			$Level = $this->db->get('level')->result();
		}
		$this->response($Level, 200);
	}
//Mengirim atau menambah data kontak baru
	function index_post() {
		$data = array(
			'name' => $this->post('name')	
		);
		$insert = $this->db->insert('level', $data);
		if ($insert) {
			//modif
			$result = $this->db->where('id',$this->db->insert_id())->get("level")->row(0);
			$this->response($result, 200);
			//asline
			//$this->response($data,200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	//Memperbarui data kontak yang telah ada
	function index_put() {
		$id = $this->put('id');
		$data = array(
			'id' => $this->put('id'),
			'name' => $this->put('name'),
			
		);
		$this->db->where('id', $id);
		$update = $this->db->update('level', $data);
		if ($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	//Menghapus salah satu data kontak
	function index_delete() {
		$id = $this->delete('id');
		$this->db->where('id', $id);
		$delete = $this->db->delete('level');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
?>