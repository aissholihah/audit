<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup_pengawas extends CI_Controller {

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
          $this->load->model('M_grup_pengawas','tb_grup_pengawas');
          // header('Access-Control-Allow-Origin: *');
          // header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
          // header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

     }
	public function index()
	{	
		// $this->load->view('welcome_message');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('admin/grup_pengawas');
		$this->load->view('admin/footer');
	}

	public function tambah_aksi()
	{
		//menangkap inputan dari form yg methodny POST
		$nama_grup			= $this->input->POST('nama_grup');	// inget POST('berdasarkan name di tag input')
		
		$ketua_grup 			= $this->input->POST('ketua_grup');
		
		$data = array (
			'nama_grup'	=>$nama_grup,			
			'ketua_grup'			=>$ketua_grup,
		); 
		var_dump($data);

		// biar $data masukk ke database tb_grup_pengawas
		$this->M_grup_pengawas->input_data($data,'tb_grup_pengawas');



		redirect ('admin/grup_pengawas/index');


	}


	public function hapus ($id)
	{
		$where = array ('id_grup_pengawas'=>$id);
		$this->M_grup_pengawas->hapus_data($where, 'tb_grup_pengawas');
		redirect ('admin/grup_pengawas/index');

	}

	public function edit ($id)
	{	

		$where = array ('id_grup_pengawas'=>$id);			// id yang ada di tb_administrator akan disimpan ke $array where.
		// buat fungsi yang akan dipake di M_administrator
		$data ['arsip'] = $this->M_grup_pengawas->edit_data($where,'tb_grup_pengawas')->result();
		// result() untuk mengenerate hasil query menjadi array.
		// meload view
		

	}

	public function update()
	{	
		
		$id							= $this->input->post('id_grup_pengawas');
		$nama_grup					= $this->input->POST('nama_grup');	// inget POST('berdasarkan name di tag input')
		$ketua_grup				= $this->input->POST('ketua_grup');
		


		
		
			$data = array (
				
			'nama_grup'			=>$nama_grup,
			'ketua_grup'		=>$ketua_grup,
			
			);
					
			$where = array (
			'id_grup_pengawas' => $id
			);
		// manggil method update datda dari m

		$this->M_grup_pengawas->update_data($where, $data, 'tb_grup_pengawas');
		// kalo udah akan diredirect ke
		redirect('admin/grup_pengawas/index');	
	}// end update

	public function ajax_list()
     {    
          $list = $this->tb_grup_pengawas->get_datatables();
          
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $a) {
               $no++;
               $row = array();
               $row[] = $no;
               $row[] = $a->nama_grup;
               $row[] = $a->ketua_grup;
               // $row[] = $a->grup;
               
               
               
               
               $row[] = '<button id="'.$a->id_grup_pengawas.'" onclick="hapusrow('.$a->id_grup_pengawas.');" class="btn btn-sm btn-danger">Hapus</button>';
               $row[] = '<button id="'.$a->id_grup_pengawas.'" onclick="editrow('.$a->id_grup_pengawas.')" class
               ="btn btn-sm btn-primary">Edit</button>';
               $data[] = $row;
          }

          $output = array(
                              "draw" => $_POST['draw'],
                              "recordsTotal" => $this->tb_grup_pengawas->count_all(),
                              "recordsFiltered" => $this->tb_grup_pengawas->count_filtered(),
                              "data" => $data,
                    );
          //output to json format
          echo json_encode($output);
     }
} //end class
