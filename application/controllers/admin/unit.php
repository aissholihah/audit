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
          $this->load->model('M_unit','v_unit_grup');
          // header('Access-Control-Allow-Origin: *');
          // header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
          // header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

     }
	public function index()
	{
		$data['gruppengawas'] = $this->M_grup_pengawas->tampil_data()->result();
		$data['form'] = $this->M_unit->tampil_form()->result();
		// $this->load->view('welcome_message');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/topbar');
		$this->load->view('admin/daftar_unit',$data);
		$this->load->view('admin/footer');
	}



	public function ajax_list()
     {    
          $list = $this->v_unit_grup->get_datatables();
          // $data['gruppengawas'] = $this->M_pengawas->tampil_data()->result();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $a) {
               $no++;
               $row = array();
               $row[] = $no;
               $row[] = $a->nama_unit;
               $row[] = $a->nama_grup;
               $row[] = $a->nama_form;
               $row[] = $a->alamat;
               $row[] = $a->nama_pj;
               
               
               
               
               $row[] = '<button id="'.$a->id_unit.'" onclick="hapusrow('.$a->id_unit.');" class="btn btn-sm btn-danger">Hapus</button>';
               $row[] = '<button id="'.$a->id_unit.'" onclick="editrow('.$a->id_unit.')"class="btn btn-sm btn-primary">Edit</button>';
               $data[] = $row;
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
		$alamat 			= $this->input->POST('alamat');
		$nama_pj 			= $this->input->POST('nama_pj');
		// setelah data dari form ditangkap, datanya akan diubah jadi array
		$data = array (
			'nama_unit'		=>$nama_unit,			
			'id_grup_pengawas'	=>$id_grup_pengawas,
			'id_form' 		=> $id_form,
			'alamat' 		=> $alamat,
			'nama_pj' 		=> $nama_pj
			
		);

		// var_dump($data);



		// biar $data masukk ke database tb_pengawas
		$this->M_unit->input_data($data,'tb_unit');
		var_dump($this->M_unit->input_data($data,'tb_unit'));
		redirect ('admin/unit/index');
	}


	public function hapus ($id)
	{
		$where = array ('id_unit'=>$id);
		$this->M_unit->hapus_data($where, 'tb_unit');
		redirect ('admin/unit/index');
	}

	public function edit ($id)
	{	

		$where = array ('id_unit'=>$id);			// id yang ada di tb_administrator akan disimpan ke $array where.
		// buat fungsi yang akan dipake di M_administrator
		$data['gruppengawas'] = $this->M_pengawas->tampil_data()->result();
		$data ['ngedit'] = $this->M_unit->edit_data($where,'tb_unit')->result();
		// $data['gruppengawas'] = $this->M_pengawas->tampil_data()->result();
		// result() untuk mengenerate hasil query menjadi array.
		// meload view
	}

	public function update()
	{		
		$id						= $this->input->post('id_unit');
		$nama_unit				= $this->input->POST('nama_unit');	// inget POST('berdasarkan name di tag input')
		$id_grup_pengawas 			= $this->input->POST('id_grup_pengawas');
		
		$id_form 					= $this->input->POST('id_form');
		$alamat 			= $this->input->POST('alamat');
		$nama_pj 			= $this->input->POST('nama_pj');	
		
			$data = array (
				'nama_unit'		=>$nama_unit,			
			'id_grup_pengawas'			=>$id_grup_pengawas,
			'id_form' 		=> $id_form,
			'alamat' 		=> $alamat,
			'nama_pj' 		=> $nama_pj
			);
					
			$where = array (
			'id_unit' => $id
			);
		// manggil method update datda dari m

		$this->M_unit->update_data($where, $data, 'tb_unit');
		// kalo udah akan diredirect ke
		redirect('admin/unit/index');	
	}// end update

} // end class
?>