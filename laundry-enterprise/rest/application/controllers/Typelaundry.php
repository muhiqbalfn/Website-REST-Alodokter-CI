<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Typelaundry extends REST_Controller {
	function __construct($config = 'rest') {
		parent::__construct($config);
		$this->load->database();
	}
 //Menampilkan data typelaundry
	function index_get() {
		$id = $this->get('typelaundry_id');
		if ($id == '') {
			$typelaundry = $this->db->get('typelaundry')->result_array();
		} else {
			$this->db->where('typelaundry_id', $id);
			$typelaundry = $this->db->get('typelaundry')->result_array();
		}
		$this->response($typelaundry, 200);
	}
//Mengirim atau menambah data kontak baru
	function index_post() {
		$data = array(
			'typelaundry_id' => $this->post('typelaundry_id'),
			'typelaundry_name' => $this->post('typelaundry_name'),
			'typelaundry_costperkilo' => $this->post('typelaundry_costperkilo')
		);
		$insert = $this->db->insert('typelaundry', $data);
		if ($insert) {
			//modif
			$result = $this->db->where('typelaundry_id',$this->db->insert_id())->get("typelaundry")->row(0);
			$this->response($result, 200);
			//asline
			//$this->response($data,200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	//Memperbarui data kontak yang telah ada
	function index_put() {
		$id = $this->put('typelaundry_id');
		$data = array(
			'typelaundry_id' => $this->post('typelaundry_id'),
			'typelaundry_name' => $this->post('typelaundry_name'),
			'typelaundry_costperkilo' => $this->post('typelaundry_costperkilo')
		);
				$this->db->where('typelaundry_id', $id);
		$update = $this->db->update('typelaundry', $data);
		if ($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	//Menghapus salah satu data kontak
	function index_delete() {
		$id = $this->delete('typelaundry_id');
		$this->db->where('typelaundry_id', $id);
		$delete = $this->db->delete('typelaundry');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
?>