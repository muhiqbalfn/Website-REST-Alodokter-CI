<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pasien extends CI_Model{

	public function getTable(){
		$query=$this->db->query("SELECT * FROM pasien");
		return $query->result();
	}
}
?>
