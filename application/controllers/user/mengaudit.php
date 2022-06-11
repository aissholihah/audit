<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mengaudit extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		$this->data['sdm'] 				=  $this->M_mengaudit->get_soal('sdm kearsipan');
		// var_dump($this->data['sdm']);
		// $data = $this-> M_mengaudit->tampil_data()
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/sub_aspek_sdm',$this->data);
		$this->load->view('user/footer');
	}
}
