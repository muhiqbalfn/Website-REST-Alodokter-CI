<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfume_m extends CI_Model {
var $soap_client;
	function __construct()
	{
		$this->soap_client = new SoapClient("http://localhost:8081/laundry-enterprise/soap/soap-server/index.php/MySoapServer?wsdl");
	}
	public function getData()
	{
		return json_decode($this->soap_client->getData(json_encode(array("table"=>"perfume"))));
	}


	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("perfume");
		$this->db->where('perfume_id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		$data = array(
			/* 'perfume_id' yang dikiri harus sama seperti di table
			'perfume_id' yang dikanan harus menurut name inputnya */
			'perfume_id' => $this->input->post('perfume_id'),
			'perfume_name' => $this->input->post('perfume_name'),
			'perfume_costperkilo' => $this->input->post('perfume_costperkilo')
		);
		/* eksekusi query insert into "perfume" diisi dengan variable $data
		face2face ae lek bingung :| */
		$insert = $this->soap_client->insertData(json_encode(array("table"=>"perfume","data"=>$data)));
	
	}

	public function updateData($id)	
	{
		/* get post data dari form input menurut "name" nya
		contoh <input name="..."> */
		// $data = array(
		// 	/* 'perfume_id' yang dikiri harus sama seperti di table
		// 	'perfume_id' yang dikanan harus menurut name inputnya */
		// 	'perfume_id' => $this->input->post('perfume_id'),
		// 	'perfume_name' => $this->input->post('perfume_name'),
		// 	'perfume_costperkilo' => $this->input->post('perfume_costperkilo')
		// );
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		//mengeset where id=$id
		/*eksekusi update perfume set $data from perfume where id=$id
		jika berhasil return berhasil */
		$this->soap_client->updateData(json_encode(array("table"=>"perfume","primary_key"=>"perfume_id","id"=>$id,"data"=>$data)));
		
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->soap_client->deleteData(json_encode(array("table"=>"perfume","primary_key"=>"perfume_id","id"=>$id)));
	}
	public function get_all_artikel($limit = FALSE, $offset = FALSE)
    {
        if($limit){
            $this->db->limit($limit,$offset);
        }
        $query = $this->db->get('perfume');
        return $query->result_array();
    }
    public function get_total()
    {
        return $this->db->count_all('perfume');
    }
}
