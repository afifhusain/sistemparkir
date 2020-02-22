<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Masuk_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');

		if( $this->form_validation->run() == false ){
			$this->load->view('desain/header');
			$this->load->view('login/index');
			$this->load->view('desain/footer');
		} else {
			$this->Masuk_model->login();
		}

	}






	public function register()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email Telah Ada'
		]);

		$this->form_validation->set_rules('pas1', 'Password', 'required|trim|min_length[3]|matches[pas2]', [
			'matches' => 'password dont match!',
			'min_length' => 'Password too short'
		]);
		$this->form_validation->set_rules('pas2', 'Password', 'required|trim|matches[pas1]');

		

	

	
		if ( $this->form_validation->run() == false ) {
		$data['title'] = 'Halaman Registrasi';
		$this->load->view('desain/header', $data);
		$this->load->view('masuk/index');
		$this->load->view('desain/footer');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('pas1'), PASSWORD_DEFAULT),
				'email' => htmlspecialchars($this->input->post('email', true))				
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Register Berhasil dilakukan, silahkan login</div>');
			redirect('masuk');
		}
		
	}



}
?>
