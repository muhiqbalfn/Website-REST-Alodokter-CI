<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_m extends CI_Model {

var $soap_client;
	function __construct()
	{
		$this->soap_client = new SoapClient("http://localhost:8081/laundry-enterprise/soap/soap-server/index.php/MySoapServer?wsdl");
	}
	public function getData()
	{
		return json_decode($this->soap_client->getData(json_encode(array("table"=>"level"))));
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
		$insert = $this->soap_client->insertData(json_encode(array("table"=>"level","data"=>$data)));
	}

	public function updateData($id)	
	{
		
		$data = $this->input->post();
		$data['id'] = $id;
		$this->soap_client->updateData(json_encode(array("table"=>"level","primary_key"=>"id","id"=>$id,"data"=>$data)));
	}

	public function hapusData($id)
	{
		$this->soap_client->deleteData(json_encode(array("table"=>"level","primary_key"=>"id","id"=>$id)));
	}
}
