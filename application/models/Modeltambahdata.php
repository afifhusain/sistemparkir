<?php 

date_default_timezone_set('Asia/Jakarta'); 
class Modeltambahdata extends CI_model{

public function tambahKendaraan()
{
	$data = [
		"no_faktur" => $this->input->post('no_faktur', true),
		"no_plat" => $this->input->post('no_plat', true),
		"jenis_mobil" => $this->input->post('jenis_mobil', true),
		"merk_mobil" => $this->input->post('merk_mobil', true),
		"warna_mobil" => $this->input->post('warna_mobil', true),
		"waktu_masuk" => date('Y-m-d H:i:s'),
		"status" => 'masuk'
	];

	
	$this->db->insert('tampildata', $data);
}

public function tambahPetugasParkir()
{
	$data = [
		'username' => htmlspecialchars($this->input->post('username', true)),
		'password' => password_hash($this->input->post('pas1'), PASSWORD_DEFAULT),
		'email' => htmlspecialchars($this->input->post('email', true)),
		'hak_akses' => 'petugas'			

	];
	$this->db->insert('user', $data);
}


}