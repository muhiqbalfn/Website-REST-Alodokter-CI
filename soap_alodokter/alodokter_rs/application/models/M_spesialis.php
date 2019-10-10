<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_spesialis extends CI_Model{

	public function getTable(){
		$query=$this->db->query("SELECT * FROM spesialis");
		return $query->result();
	}
}
?>
