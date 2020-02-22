<?php 

class Masuk_model extends CI_model{

	public function login()
	{
		$username = $this->input->post('username');
		$pasword = $this->input->post('password');

		$user = $this->db->get('user')->result_array;
		$username = $this->db->get_where('user', ['username' => $username])->row_array();


		if($user){
			if(password_verify($password, $username['password'])){
				redirect('tampildata');
			}
		} 


	}

}