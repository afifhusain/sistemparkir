<?php 

class Modeltampildata extends CI_model{

  public function tampildataAdmin()
  {
  	return $this->db->get('tampildata')->result_array();
  }

  public function halamanUser()
  {

  }




}

