<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('desain/header');
		$this->load->view('masuk/index');
		$this->load->view('desain/footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|unik [user.email]', [
			'unik' => 'email telah terdaftar'
		]);

		$this=>
	}



}
