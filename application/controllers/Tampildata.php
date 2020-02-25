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

		$this->load->view('desain/header');
		$this->load->view('tampildata/admin', $data);
		$this->load->view('desain/footer');

	}

	public function user()
	{
		echo "Halaman user";
	}


}
