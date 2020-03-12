<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahdata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Modelubahdata');
		$this->load->library('form_validation');
	}

	public function kendaraan($id)
	{
		$data['title'] = 'Halaman Ubah Data Kendaraan';
		$data['kendaraan'] = $this->Modelubahdata->dapatkanIDtampil($id);

		$this->form_validation->set_rules('no_faktur', 'Nomor Faktur', 'required|numeric');
		$this->form_validation->set_rules('no_plat', 'Nomor Plat', 'required');
		$this->form_validation->set_rules('jenis_mobil', 'Jenis Mobil', 'required');
		$this->form_validation->set_rules('merk_mobil', 'Merk Mobil', 'required');
		$this->form_validation->set_rules('warna_mobil', 'Warna Mobil', 'required');



		if($this->form_validation->run() == false) {
			$this->load->view('desain/admheader', $data);
			$this->load->view('ubahdata/kendaraan', $data);
			$this->load->view('desain/admfooter');
		} else {
			$this->Modelubahdata->ubahdata();
			$this->session->set_flashdata('flash', 'Data Kendaraan Berhasil Diubah');
			redirect('tampildata/adminview');

		}


	}

	

	public function ubahstatus()
	{
		$data = [
			"status" => 'keluar',
			"waktu_keluar" => date('Y-m-d H:i:s')
		];

		$this->db->insert('tampildata', $data);
	}

}