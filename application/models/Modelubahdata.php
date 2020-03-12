<?php 

class Modelubahdata extends CI_model{

	public function dapatkanIDtampil($id)
	{
		return $this->db->get_where('tampildata', ['id_tampil' => $id])->row_array();
	}

	public function ubahdata()
	{
		$data = [
			"no_faktur" => $this->input->post('no_faktur', true),
			"no_plat" => $this->input->post('no_plat', true),
			"jenis_mobil" => $this->input->post('jenis_mobil', true),
			"warna_mobil" => $this->input->post('warna_mobil', true)
		];
	}

}
