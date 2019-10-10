<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Typelaundry_m extends CI_Model {

	var $soap_client;
	function __construct()
	{
		$this->soap_client = new SoapClient("http://localhost:8081/laundry-enterprise/soap/soap-server/index.php/MySoapServer?wsdl");
	}

	public function getData()
	{
		return json_decode($this->soap_client->getData(json_encode(array("table"=>"typelaundry"))));
		
	}
	public function getDataById($id)
	{
		$this->db->where('typelaundry_id',$id);
		$query = $this->db->get("typelaundry");
		return $query->result_array();
	}
	public function insertData()
	{
		$data = array(
			'typelaundry_name' => $this->input->post('typelaundry_name'),
			'typelaundry_costperkilo' => $this->input->post('typelaundry_costperkilo')
		);
		$insert = $this->soap_client->insertData(json_encode(array("table"=>"typelaundry","data"=>$data)));
		
	}
	public function updateData($id)
	{
		$data = array(
			'typelaundry_name' => $this->input->post('typelaundry_name'),
			'typelaundry_costperkilo' => $this->input->post('typelaundry_costperkilo')
		);
		
		$this->soap_client->updateData(json_encode(array("table"=>"typelaundry","primary_key"=>"typelaundry_id","id"=>$id,"data"=>$data)));
		
	}
	public function deleteData($id)
	{
		$this->soap_client->deleteData(json_encode(array("table"=>"typelaundry","primary_key"=>"typelaundry_id","id"=>$id)));
		
	}
}