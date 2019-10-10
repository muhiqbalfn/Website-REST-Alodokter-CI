<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Perfume extends REST_Controller {
	
	
	function __construct($config = 'rest') {
		parent::__construct($config);
		$this->load->database();
	}
 //Menampilkan data typelaundry
	function index_get() {
		$id = $this->get('id');
		if ($id == '') {
			$Perfume = $this->db->get('perfume')->result();
		} else {
			$this->db->where('perfume_id', $id);
			$Perfume = $this->db->get('perfume')->result();
		}
		$this->response($Perfume, 200);
	}
//Mengirim atau menambah data kontak baru
	function index_post() {
		$data = array(
			'perfume_name' => $this->post('perfume_name'),
			'perfume_costperkilo' => $this->post('perfume_costperkilo')	
		);
		$insert = $this->db->insert('perfume', $data);
		if ($insert) {
			//modif
			$result = $this->db->where('perfume_id',$this->db->insert_id())->get("perfume")->row(0);
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
			
			'perfume_name' => $this->put('perfume_name'),
			'perfume_costperkilo' => $this->put('perfume_costperkilo')
			
		);
		$this->db->where('perfume_id', $id);
		$update = $this->db->update('perfume', $data);
		if ($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	//Menghapus salah satu data kontak
	function index_delete() {
		$id = $this->delete('id');
		$this->db->where('perfume_id', $id);
		$delete = $this->db->delete('perfume');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
?>