<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesanrs extends CI_Model{

	public function getPesanRsWhereUname($uname){
		$query=$this->db->query("SELECT * FROM pesan_rs where username='$uname'");
		return $query->result();
	}

	public function getPesanRsWhereIdRs($id){
		$query=$this->db->query("SELECT * FROM pesan_rs where id_rs='$id'");
		return $query->result();
	}

	public function getPesanRsWhereIdPesanRs(){
            $this->db->select('Right(id_pesanrs,1) as kode ',false);
            $this->db->order_by('id_pesanrs', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('pesan_rs');

            if($query->num_rows()<>0)
            {
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }
            else
            {
                $kode = 1;
            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "PRS".$kodemax;
            return $kodejadi;
        }

}
 ?>
