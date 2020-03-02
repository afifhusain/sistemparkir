<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahdata extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Modeltambahdata');
		$this->load->library('form_validation');
	}


	public function kendaraan()
	{

		$data['title'] = 'Halaman Tambah Data Kendaraan';
		$this->form_validation->set_rules('no_faktur', 'Nomor Faktur', 'required');
		$this->form_validation->set_rules('no_plat', 'Nomor Plat', 'required|numeric');
		$this->form_validation->set_rules('jenis_mobil', 'Jenis Mobil');
		$this->form_validation->set_rules('merk_mobil', 'Merk Mobil');
		$this->form_validation->set_rules('warna_mobil', 'Warna Mobil');


		$this->load->view('desain/admheader', $data);
		$this->load->view('tambahdata/tambahkendaraan', $data);
		$this->load->view('desain/admfooter');

		$this->Modeltambahdata->tambahKendaraan();
		redirect('masuk');

	}



}
