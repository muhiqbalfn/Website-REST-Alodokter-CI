<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Typelaundry_c extends CI_Controller {
	//yang ada curl di copys
	//iki
	var $API ="";

	public function __construct()
	{
		parent::__construct();
		//iki
		$this->API="http://192.168.1.8/laundry/rest/index.php";
		//http://localhost:8081/laundry-enterprise/rest/index.php client
		$this->load->helper('form');
		$this->load->model('Typelaundry_m');
		//iki
		$this->load->library('curl');

		if($this->session->userdata("id") == null){
			redirect("Home");
		}
	}
	public function index()
	{
		//iki
		$data['getData'] = json_decode($this->curl->simple_get($this->API.'/Typelaundry'));

		$this->load->view('admin/typelaundry/typelaundry.php',$data);
	}
	public function input()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('typelaundry_name','Name','required');
		$this->form_validation->set_rules('typelaundry_costperkilo','Cost Per Kilo','required');
		if($this->form_validation->run() == false)
			$this->load->view('admin/typelaundry/add.php');
		else{
			$set = array(
			'typelaundry_name' => $this->input->post('typelaundry_name'),
			'typelaundry_costperkilo' => $this->input->post('typelaundry_costperkilo'),
		);
		$this->curl->simple_post($this->API.'/Typelaundry', $set, array(CURLOPT_BUFFERSIZE => 10));
			redirect('admin/Typelaundry_c');
		}
	}
	public function update($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('typelaundry_name','Name','required');
		$this->form_validation->set_rules('typelaundry_costperkilo','Cost Per Kilo','required');
		$data['getData'] = $data['getData'] = $this->Typelaundry_m->getDataById($id)[0];
		if($this->form_validation->run() == false)
			$this->load->view('admin/typelaundry/update.php',$data);
		else{
		$set = array(
			'typelaundry_id' => $id,
			'typelaundry_name' => $this->input->post('typelaundry_name'),
			'typelaundry_costperkilo' => $this->input->post('typelaundry_costperkilo'),
		);
		$this->curl->simple_put($this->API.'/Typelaundry', $set, array(CURLOPT_BUFFERSIZE => 10));$this->Typelaundry_m->updateData($id);
			redirect('admin/Typelaundry_c');
		}
	}
	public function delete($id)
	{
		$this->curl->simple_delete($this->API.'/Typelaundry', array('typelaundry_id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
		redirect('admin/Typelaundry_c','refresh');
	}
}