<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokter extends CI_Model{

	public function getTable(){
		$query=$this->db->query("SELECT * FROM dokter");
		return $query->result();
	}
}
?>
