<?php
Class C_pesanrs extends CI_Controller{

	var $API ="";
	function __construct() {
		parent::__construct();
		$this->API="http://localhost/enterprise/rest_alodokter/alodokter_server/index.php";
		$this->load->model('M_pesanrs');
		$this->load->library(array('session'));
	}

	// menampilkan data rumahsakit
	function index(){
		$params = $this->session->userdata('uname');
		$data['pesan_rs'] = $this->M_pesanrs->getPesanRsWhereUname($params);
		$this->load->view('rumahsakit/listpesanrs', $data);

		// $data['pesan_rs'] = json_decode($this->curl->simple_get($this->API.'/C_pesanrs'));
		// $this->load->view('rumahsakit/listpesanrs', $data);
	}

 	// insert data pesan rs
	function insert(){
		if(isset($_POST['submit'])){
			$data = array(
				'id_pesanrs'=> $this->input->post('id_pesanrs'),
				'id_rs' => $this->input->post('id_rs'),
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'tgl_pesan'=> $this->input->post('tgl_pesan'),
				'waktu_pesan' => $this->input->post('waktu_pesan'));
			//mempost data ke controller pesanrs
			$insert = $this->curl->simple_post($this->API.'/C_pesanrs', $data,
				array(CURLOPT_BUFFERSIZE => 10));
			if($insert)
			{
				$this->session->set_flashdata('hasil','Insert Data Berhasil');
			}else
			{
				$this->session->set_flashdata('hasil','Insert Data Gagal');
			}
			redirect('C_rumahsakit1');
		}else{
			//mendapatkan id RS dari get di server menggunakan parameter
			//$params = array('id_rs'=> $this->uri->segment(3));
			$params = $this->uri->segment(3);
			$data['rumahsakit']=$this->M_pesanrs->getPesanRsWhereIdRs($params);
			$data['rumahsakit1']=$this->M_pesanrs->getPesanRsWhereIdPesanRs();
			// $data['rumahsakit'] = json_decode($this->curl->simple_get($this->API.'/C_rumahsakit', $params));
			$this->load->view('rumahsakit/pesanrs', $data);
		}
	}

	

	//====================================================================================

	 // edit data pesan rs
	function update(){
		if(isset($_POST['submit'])){
			$data = array(
				'id_pesanrs'=> $this->input->post('id_pesanrs'),
				'id_rs' => $this->input->post('id_rs'),
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'tgl_pesan'=> $this->input->post('tgl_pesan'),
				'waktu_pesan' => $this->input->post('waktu_pesan'));
			$update = $this->curl->simple_put($this->API.'/C_pesanrs', $data,
				array(CURLOPT_BUFFERSIZE => 10));
			if($update)
			{
				$this->session->set_flashdata('hasil','Update Data Berhasil');
			}else
			{
				$this->session->set_flashdata('hasil','Update Data Gagal');
		  	}
			redirect('C_pesanrs');
		}else{
			$params = array('id_pesanrs'=> $this->uri->segment(3));
			$data['pesan_rs'] = json_decode($this->curl->simple_get($this->API.'/C_pesanrs',$params));
			$this->load->view('rumahsakit/editpesanrs', $data);
		}
	}

 	// delete data pesan rs
	function delete($id_pesanrs){
		if(empty($id_pesanrs)){
			redirect('C_pesanrs');
		}else{
			$delete = $this->curl->simple_delete($this->API.'/C_pesanrs', array('id_pesanrs'=>$id_pesanrs),
				array(CURLOPT_BUFFERSIZE => 10));
			if($delete)
			{
				$this->session->set_flashdata('hasil','Delete Data Berhasil');
			}else
			{
				$this->session->set_flashdata('hasil','Delete Data Gagal');
			}
			redirect('C_pesanrs');
		}
	}

}

/* End of file rumahsakit.php */
/* Location: ./application/controllers/rumahsakit.php */