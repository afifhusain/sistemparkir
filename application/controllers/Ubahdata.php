<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahdata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Modelubahdata');
		$this->load->library('form_validation');
	}

	public function kendaraan()
	{
		$data['title'] = 'Halaman Ubah Data Kendaraan';
		$this->load->view('desain/admheader', $data);
		$this->load->view('ubahdata/kendaraan');
		$this->load->view('desain/admfooter');
	}

	public function dapatkanId($id)
	{
		return $this->db->get_where('tampildata', 'id_tampil' => $id)->row_array();
	}

	public function ubahstatus()
	{
		$data [
			"status" => 'keluar',
			"waktu_keluar" => date('Y-m-d H:i:s')
		];

		$this->db->insert->('tampildata', $data);
	}

}