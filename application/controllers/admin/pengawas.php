<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawas extends CI_Controller {

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
		  if($this->session->userdata('role_id') !=1 ){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Anda Belum Login!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('auth/login');
		  }
          
          // $this->simple_login_admin->cek_login();
          $this->load->model('M_pengawas','v_pengawas');
          // header('Access-Control-Allow-Origin: *');
          // header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
          // header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

     }
	public function index()
	{
		$data['gruppengawas'] = $this->M_grup_pengawas->tampil_data()->result();
		// $this->load->view('welcome_message');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('admin/daftar_pengawas',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_aksi()
	{
		//menangkap inputan dari form yg methodny POST
		$nama_pengawas			= $this->input->POST('nama_pengawas');	// inget POST('berdasarkan name di tag input')
		
		$jabatan_pengawas 			= $this->input->POST('jabatan_pengawas');
		$grup 			= $this->input->POST('grup');
		// $data['password'] =    md5($this->input->post('password'));
		$username 			= $this->input->POST('username');
		$password 			= md5($this->input->POST('password'));

		// setelah data dari form ditangkap, datanya akan diubah jadi array
		$data = array (
			'nama_pengawas'	=>$nama_pengawas,			
			'jabatan_pengawas'			=>$jabatan_pengawas,
			'grup'	=>$grup,
			'username' => $username,
			'password' => $password	
		);

		// biar $data masukk ke database tb_pengawas
		$this->M_pengawas->input_data($data,'tb_pengawas');

		redirect ('admin/pengawas/index');


	}


	public function hapus ($id)
	{
		$where = array ('id_pengawas'=>$id);
		$this->M_pengawas->hapus_data($where, 'tb_pengawas');
		redirect ('admin/pengawas/index');
	}

	public function edit ($id)
	{	

		$where = array ('id_pengawas'=>$id);			// id yang ada di tb_administrator akan disimpan ke $array where.
		// buat fungsi yang akan dipake di M_administrator
		$data['gruppengawas'] = $this->M_pengawas->tampil_data()->result();
		$data ['arsip'] = $this->M_pengawas->edit_data($where,'tb_pengawas')->result();
		// result() untuk mengenerate hasil query menjadi array.
		// meload view	

	}

	public function update()
	{	
		
		$id							= $this->input->post('id_pengawas');
		$nama_pengawas					= $this->input->POST('nama_pengawas');	// inget POST('berdasarkan name di tag input')
		$jabatan_pengawas				= $this->input->POST('jabatan_pengawas');
		$grup 			= $this->input->POST('grup');	
		
			$data = array (
				
			'nama_pengawas'			=>$nama_pengawas,
			'jabatan_pengawas'		=>$jabatan_pengawas,
			'grup'	=>$grup
			);
					
			$where = array (
			'id_pengawas' => $id
			);
		// manggil method update datda dari m

		$this->M_pengawas->update_data($where, $data, 'tb_pengawas');
		// kalo udah akan diredirect ke
		redirect('admin/pengawas/index');	
	}// end update

	public function ajax_list()
     {    
          $list = $this->v_pengawas->get_datatables();
          // $data['gruppengawas'] = $this->M_pengawas->tampil_data()->result();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $a) {
               $no++;
               $row = array();
               $row[] = $no;
               $row[] = $a->nama_pengawas;
               $row[] = $a->jabatan_pengawas;
               $row[] = $a->nama_grup;
               
               
               
               
               $row[] = '<button id="'.$a->id_pengawas.'" onclick="hapusrow('.$a->id_pengawas.');" class="btn btn-sm btn-danger">Hapus</button>';
               $row[] = '<button id="'.$a->id_pengawas.'" onclick="editrow('.$a->id_pengawas.')"class="btn btn-sm btn-primary">Edit</button>';
               $data[] = $row;
          }

          $output = array(
                              "draw" => $_POST['draw'],
                              "recordsTotal" => $this->v_pengawas->count_all(),
                              "recordsFiltered" => $this->v_pengawas->count_filtered(),
                              "data" => $data,
                    );
          //output to json format
          echo json_encode($output);
     }
} //end class
