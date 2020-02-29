<?php 

class Modeltampildata extends CI_model{

  public function tampildataAdmin()
  {
  	return $this->db->get('tampildata')->result_array();
  }

  public function tampildataUser()
  {
  	return $this->db->get_where('tampildata', ['hak_akses' => 'user' ])->result_array();
  }

  public function dapatkandataId($id)
  {
  	return $this->db->get_where('tampildata', ['id_tampil' => $id]);
  }

  public function hapusData($id)
  {
  	$this->db->delete('tampildata', ['id_tampil' => $id]);
  }

  public function ubahData()
  {

  	
  }

  public function tambahDataKendaraan()
  {
    
  }




}

