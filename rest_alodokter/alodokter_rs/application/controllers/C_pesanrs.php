<?php
Class C_pesanrs extends CI_Controller{

	var $API ="";

	function __construct() {
		parent::__construct();
		$this->API="http://localhost/ENTERPRISE/rest_alodokter/alodokter_server/index.php";
		$this->load->model('M_pesanrs');
		$this->load->library(array('session'));
	}

	// menampilkan data rumahsakit
	function index(){
		// $data['pesan_rs'] = $this->M_pesanrs->getPesan();
		// $this->load->view('rumahsakit/listpesanrs', $data);

		$params = array('id_rs'=> 'RS001');
		$data['pesan_rs'] = json_decode($this->curl->simple_get($this->API.'/C_idrspesan',$params));
		$this->load->view('rumahsakit/listpesanrs', $data);

		// $data['pesan_rs'] = json_decode($this->curl->simple_get($this->API.'/C_pesanrs',$params));
		// $this->load->view('rumahsakit/listpesanrs', $data);
	}

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