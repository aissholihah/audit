<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard_admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') !=1 ){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Anda Belum Login!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('admin/auth/login');
		}
	} 

	public function index (){
		$data['title'] = "Dashboard Admin";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
    // $data['grupform'] = $this->M_aspek->tampil_data()->result();
    // var_dump($data['grupform']);
		$this->load->view('admin/dashboard_admin');

		$this->load->view('admin/footer');
	}
}//end class

?>
