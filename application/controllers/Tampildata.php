<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampildata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Modeltampildata');
		$this->load->library('form_validation');
	}

	public function admin()
	{
		$data['kendaraan'] = $this->Modeltampildata->tampildataAdmin();

		//$this->load->view('desain/header');
		$this->load->view('adminview/admin', $data);
		$this->load->view('adminview/tampildata', $data);

		$this->load->view('desain/footer');

	}

	public function adminview()
	{
		$data['title'] = 'Halaman Tampil Data Kendaraan';
		$data['kendaraan'] = $this->Modeltampildata->tampildataAdmin();
		
		
		$this->load->view('desain/admheader', $data);
		$this->load->view('adminview/tampildata', $data);
		$this->load->view('desain/admfooter');
	}
 
	public function user()
	{
		$data['kendaraan'] = $this->Modeltampildata->tampildataUser();

		$this->load->view('desain/header');
		$this->load->view('tampildata/user', $data);
		$this->load->view('desain/footer');
	}
	public function tambahdata()
	{
		$this->load->view('desain/header');
		$this->load->view('tampildata/tambahdata');
		$this->load->view('desain/footer');
	}




}
