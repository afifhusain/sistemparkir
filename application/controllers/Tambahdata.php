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
		$this->form_validation->set_rules('no_faktur', 'Nomor Faktur', 'required|numeric');
		$this->form_validation->set_rules('no_plat', 'Nomor Plat', 'required');
		$this->form_validation->set_rules('jenis_mobil', 'Jenis Mobil', 'required');
		$this->form_validation->set_rules('merk_mobil', 'Merk Mobil', 'required');
		$this->form_validation->set_rules('warna_mobil', 'Warna Mobil', 'required');


		if ($this->form_validation->run() == false){
			$this->load->view('desain/admheader', $data);
			$this->load->view('tambahdata/tambahkendaraan', $data);
			$this->load->view('desain/admfooter');
		} else {
			$this->Modeltambahdata->tambahKendaraan();
			redirect('tampildata/adminview');
		}

	}

	public function user()
	{
		$data['title'] = 'Tambah Data Petugas Parkir';

		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email Telah Ada'
		]);

		$this->form_validation->set_rules('pas1', 'Password', 'required|trim|min_length[3]|matches[pas2]', [
			'matches' => 'password dont match!',
			'min_length' => 'Password too short'
		]);
		$this->form_validation->set_rules('pas2', 'Password', 'required|trim|matches[pas1]');


		if ($this->form_validation->run() == false){
			$this->load->view('desain/admheader', $data);
			$this->load->view('tambahdata/tambahuser', $data);
			$this->load->view('desain/admfooter');
		} else {
			$this->Modeltambahdata->tambahPetugasParkir();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Petugas Berhasil Ditambahkan</div>');
			redirect('tambahdata/user');

		}

	}



}
