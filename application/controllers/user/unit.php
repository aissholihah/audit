<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

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

	public function __construct()
     {
          parent::__construct();
		  if($this->session->userdata('role_id') !=2 ){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Anda Belum Login!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('auth/login');
		  }
          
          // $this->simple_login_admin->cek_login();
          $this->load->model('M_unit','v_unit_grup');
          // header('Access-Control-Allow-Origin: *');
          // header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
          // header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

     }
	public function index()
	{
		$data['gruppengawas'] = $this->M_grup_pengawas->tampil_data()->result();
		$data['form'] = $this->M_unit->tampil_form()->result();

		// $data['grup_user'] = $this->M_unit->grup_user();
		// $where= array(
		// 	'id_pengawas' => $id_grup_pengawas,
		// 	'username' => $username,
		// );
		// $data['png']	= $this->M_pberita->get_data('berita',$config['per_page'], $data['page']) -> result();
		// $auth = $this->M_auth->cek_login();
		// $data['username']=$this->session->set_userdata('username', $auth->username);
		// var_dump($data['grup_user']);
		
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/daftar_unit',$data);
		$this->load->view('user/footer');
	}



	public function ajax_list()
     {    
     	//var_dump($this->session->userdata('id_grup_pengawas'));
          $list = $this->v_unit_grup->get_datatables();
                   
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $a) {
          	if($a->id_grup_pengawas==$this->session->userdata('id_grup_pengawas')){
               $no++;
               $row = array();
               $row[] = $no;
               $row[] = $a->nama_unit;
               $row[] = $a->nama_grup;
               $row[] = $a->nama_form;
               
               if ($a->id_form==1) {

               	$row[] = '<button id="'.$a->id_unit.'" onclick="window.open(\'pengawasan/penyihir/'.$a->id_unit.'\',\'_blank\');" class="btn btn-sm btn-warning">Nilai</button>';
               }else{$row[] = '<button id="'.$a->id_unit.'" onclick="window.open(\'pengawasan/penyihir_up/'.$a->id_unit.'\',\'_blank\');" class="btn btn-sm btn-warning">Nilai</button>';

               }
               
               // $row[] = '<button id="'.$a->id_unit.'" onclick="window.open(\'pengawasan/penyihir/\',\'_blank\');" class="btn btn-sm btn-warning">Nilai</button>';
               // $row[] = '<button id="'.$a->id_unit.'" onclick="editrow('.$a->id_unit.')"class="btn btn-sm btn-primary">History</button>';
               $row[] = '<button id="'.$a->id_unit.'" onclick="window.open(\'pengawasan/history/'.$a->id_unit.''.$a->nama_unit.'\',\'_blank\');" class="btn btn-sm btn-primary">History</button>';
               $data[] = $row;
          	}
          }

          $output = array(
                              "draw" => $_POST['draw'],
                              "recordsTotal" => $this->v_unit_grup->count_all(),
                              "recordsFiltered" => $this->v_unit_grup->count_filtered(),
                              "data" => $data,
                    );
          //output to json format
          echo json_encode($output);
     }//end ajax_list
     public function tambah_aksi()
	{
		//menangkap inputan dari form yg methodny POST
		$nama_unit			= $this->input->POST('nama_unit');	// inget POST('berdasarkan name di tag input')
		
		$id_grup_pengawas 			= $this->input->POST('id_grup_pengawas');
		
		$id_form 			= $this->input->POST('id_form');
		
		// setelah data dari form ditangkap, datanya akan diubah jadi array
		$data = array (
			'nama_unit'		=>$nama_unit,			
			'id_grup_pengawas'			=>$id_grup_pengawas,
			'id_form' 		=> $id_form
			
		);

		// var_dump($data);



		// biar $data masukk ke database tb_pengawas
		$this->M_unit->input_data($data,'tb_unit');
		var_dump($this->M_unit->input_data($data,'tb_unit'));
		redirect ('user/pengawasan/penyihir_uk');


	}

} // end class
?>