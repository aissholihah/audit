<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		// set form_validation
		$this->form_validation->set_rules('username', 'Username','required',['required' 	=> 'Username Wajib di isi!']);
		$this->form_validation->set_rules('password', 'Password','required',['required' 	=> 'Password Wajib di isi!']);

		if($this->form_validation->run()== FALSE)
		{
			// $data['title'] = "Login";
			$this->load->view('admin/header');
			$this->load->view('form_login');
			$this->load->view('admin/footer');
		}else{
			$auth = $this->M_auth->cek_login();
			if ($auth==FALSE) 
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Username atau Password Anda salah !
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
				redirect('admin/auth/login');
			}else{
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);
				switch($auth->role_id){
					case 1 : redirect('admin/dashboard_admin');
					break;
					case 2 : redirect('user/dashboard_user');
					break;
					default : break;
				}
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin/auth/login');
	}

	// public function index (){
	// 	$data['title'] = "Login";
	// 	$this->load->view('admin/header',$data);
	// 	$this->load->view('admin/sidebar');
	// 	$this->load->view('admin/topbar');

	// 	$this->load->view('admin/login');

	// 	$this->load->view('admin/footer');
	// }
}//end class

?>
