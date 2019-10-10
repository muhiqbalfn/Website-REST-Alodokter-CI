<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Users extends REST_Controller {
	function __construct($config = 'rest') {
		parent::__construct($config);
		$this->load->database();
	}
 //Menampilkan data typelaundry
	function index_get() {
		$id = $this->get('id');
		if ($id == '') {
			$users = $this->db->get('users')->result();
		} else {
			$this->db->where('id', $id);
			$users = $this->db->get('users')->result();
		}
		$this->response($users, 200);
	}
//Mengirim atau menambah data kontak baru
	function index_post() {
		$data = array(
			'id' => $this->post('id'),
			'firstname' => $this->post('firstname'),
			'lastname' => $this->post('lastname'),
			'address' => $this->post('address'),
			'telp' => $this->post('telp'),
			'username' => $this->post('username'),
			'password' => $this->post('password'),
			'image' => $this->post('image'),
			'fk_id_level' => $this->post('fk_id_level')
		);
		$insert = $this->db->insert('users', $data);
		if ($insert) {
			//modif
			$result = $this->db->where('id',$this->db->insert_id())->get("users")->row(0);
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
			'firstname' => $this->put('firstname'),
			'lastname' => $this->put('lastname'),
			'address' => $this->put('address'),
			'telp' => $this->put('telp'),
			'username' => $this->put('username'),
			'password' => $this->put('password'),
			'image' => $this->put('image'),
			'fk_id_level' => $this->put('fk_id_level')
		);
		$this->db->where('id', $id);
		$update = $this->db->update('users', $data);
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
		$delete = $this->db->delete('users');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
?>