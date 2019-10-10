<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanrs extends CI_Model{

	public function getPesan(){
		$query=$this->db->query("SELECT * FROM pesan_rs");
		return $query->result();
	}

	public function getPesanRsWhereUname($uname){
		$query=$this->db->query("SELECT * FROM pesan_rs where username='$uname'");
		return $query->result();
	}

	public function getPesanRsWhereIdRs($id){
		$query=$this->db->query("SELECT * FROM pesan_rs where id_rs='$id'");
		return $query->result();
	}

}
 ?>
