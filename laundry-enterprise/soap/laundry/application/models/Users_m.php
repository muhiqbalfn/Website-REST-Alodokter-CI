<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

var $soap_client;
	function __construct()
	{
		$this->soap_client = new SoapClient("http://localhost/laundry-enterprise/soap/soap-server/index.php/MySoapServer?wsdl");
	}

	public function getData()
	{
		return json_decode($this->soap_client->getData(json_encode(array("table"=>"users"))));
		
	}


	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("users");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData($upload_name)
	{
		$data = $this->input->post();
		$data['password'] = md5($data['password']);
		$data['image'] = $upload_name;
		/* eksekusi query insert into "users" diisi dengan variable $data
		face2face ae lek bingung :| */
		$insert = $this->soap_client->insertData(json_encode(array("table"=>"users","data"=>$data)));
	}

	public function updateData($id,$upload_name=null)	
	{
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		$data['id'] = $id;
		$data['password'] = md5($data['password']);
		//jika image kosong maka tidak mengubah image
		if($upload_name!=null)
			$data['image'] = $upload_name;
		//mengeset where id=$id
		
		$this->soap_client->updateData(json_encode(array("table"=>"users","primary_key"=>"id","id"=>$id,"data"=>$data)));
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->soap_client->deleteData(json_encode(array("table"=>"users","primary_key"=>"id","id"=>$id)));
	}

	public function upload(){
        $config['upload_path'] = './assets/upload/users/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('image')){
            $return = array('result' => 'success', 'file' => $this->upload->data(),
            'error' => '');
            return $return;
        }else{
            $return = array('result' => 'failed', 'file' => '', 'error' =>
            $this->upload->display_errors());
            return $return;
        }
    }
}
