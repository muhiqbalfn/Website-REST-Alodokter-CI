<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table level
		$this->db->from("level");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from level"

		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}


	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("level");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		
		$data = $this->input->post();
		$this->curl->simple_post($this->API.'/level', $data, array(CURLOPT_BUFFERSIZE => 10));
	}

	public function updateData($id)	
	{
		
		$data = $this->input->post();
		$data['id'] = $id;
		$this->curl->simple_put($this->API.'/level', $data, array(CURLOPT_BUFFERSIZE => 10));
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->db->where('id',$id);
		/* eksekusi delete from level where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("level")){
			return "Berhasil";
		}
	}
}
