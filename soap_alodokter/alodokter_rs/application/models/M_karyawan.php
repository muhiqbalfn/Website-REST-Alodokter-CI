<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model{

	public function getTable(){
		$query=$this->db->query("SELECT * FROM karyawan");
		return $query->result();
	}
}
?>
