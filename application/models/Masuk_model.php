<?php 

class Masuk_model extends CI_model{

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// $user = $this->db->get('user')->result_array;
		$query = $this->db->get_where('user', ['username' => $username])->row_array();


		if($query){
			if(password_verify($password, $query['password'])){

				$data = [
					'username' => $query['username'],
					'hak_akses' => $query['hak_akses']
				 ];
				$this->session->set_userdata($data);
					if ( $query['hak_akses'] == 'admin' ){
						redirect('tampildata/admin');
					} else {
						redirect('tampildata/user');
					}
			} else {
				$this->session->set_flashdata('message', '<div class="card-panel red darken-1">Password Salah</div>');
					redirect('masuk');
			} 
		} else {
			$this->session->set_flashdata('message', '<div class="card-panel red darken-1">Belum registrasi</div>');
			redirect('masuk');
		} 


	}

}