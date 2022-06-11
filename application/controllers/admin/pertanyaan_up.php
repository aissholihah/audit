<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pertanyaan_up extends CI_Controller
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
			redirect('auth/login');
		}
	} 

  public $outputs = [
    'status'  => false,
    'message' => '',
    'data'    => []
  ];

  // public function __construct()
  // {
  //   parent::__construct();
  //   $this->load->model([
  //     'M_pertanyaan_uk'
  //   ]);
    
  // }

  public function index()
  {
    $data['title'] = "Pertanyaan Unit Pengolah ";
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/topbar');
    $data['grupform'] = $this->M_pertanyaan_up->tampil_data_form()->result();
    $data['grupaspek'] = $this->M_pertanyaan_up->tampil_data_aspek()->result();
    // var_dump($data['grupform']);
    $this->load->view('admin/pertanyaan_up',$data);

    $this->load->view('admin/footer');

  }

  public function get_siswa()
  { 

    if (!$this->input->is_ajax_request()) {
      show_404(); // Jika tidak akses melalui ajax request
    } else {
      //isset() merupakan salah satu fungsi php, guna untuk memeriksa suatu objek dari nilai inputan form
      if(isset($_POST['parentid'])){ // udah ada belum  inputan yang name nya parentid?
      $parent         =$_POST['parentid']; // kalo ada, lalu simpen  ke variabel parent.
      }else{
        $parent         ='0'; // kalo ngga ada set ini. 
      }
      $column_order   = ['', 'pertanyaan', 'kode_pertanyaan','nama_form','nama_aspek']; // Order berdasarkan columns pada table siswa
      $column_search  = ['pertanyaan', 'kode_pertanyaan','nama_form','nama_aspek']; // Pencarian berdasarkan columns nama siswa
      $order          = ['pertanyaan' => 'ASC']; // Sorting berdasarkan nama siswa menggunakan ASC
      $list           = $this->M_pertanyaan_up->get_datatables('v_pertanyaan', $column_order, $column_search, $order, $parent); // Memanggil siswa model untuk menampilkannya ke datatables
      

      $upper = $this->M_pertanyaan_up->get_parent_id($parent);

      $data           = [];
      
      $no             = $_POST['start'];
      // $folder = 
      foreach ($list as $key => $lists) {
        $no++;
        $data[$key][]  = $no;
        $data[$key][]  = $lists->id_pertanyaan;
        $data[$key][]  = $lists->kode_pertanyaan;
        
        if($lists->sub=='1'){// kalo folder bernilai 1. liaten value di inputan select.
        $data[$key][]  = '<span style="color : orange"><i class="fa fa-folder-open"> <a href="javascript:;"  onclick="tampil_siswa(' . $lists->id_pertanyaan . ',\''.$lists->pertanyaan.'\')" style="text-decoration: none">'.$lists->pertanyaan.'</a></i></span>';}
        else{
          $data[$key][]  = '<span style="color : lightblue"><i class="fa fa-file"> <a href="javascript:;"   style="text-decoration: none">'.$lists->pertanyaan.'</a></i></span>';
        }
        
        $data[$key][]  = $lists->jawaban;
        $data[$key][]  = $lists->cell_y;
        $data[$key][]  = $lists->cell_t;
        $data[$key][]  = $lists->nama_form; //tahun di aspek kagak ada.
        $data[$key][]  = $lists->nama_aspek; //tahun di aspek kagak ada.
        $data[$key][]    = $lists->id_aspek."-".$lists->id_pertanyaan;
        
        $data[$key][]  = '<a href="javascript:;" class="btn btn-warning btn-sm" onclick="edit(' . $lists->id_pertanyaan . ')">EDIT</a>';
        $data[$key][]  = '<a href="javascript:;" class="btn btn-danger btn-sm" onclick="hapus(' . $lists->id_pertanyaan . ')">HAPUS</a>';
      }
      if ($upper->num_rows()>0) {
          $upper=$upper->row();
          $jar=count($list);
          $data[$jar][]  = '';
          $data[$jar][]  = '';

          $data[$jar][]  = '<a href="javascript:;" class="btn btn-warning btn-sm" onclick="tampil_siswa(' . $upper->parent_id . ',\''.$upper->pertanyaan.'\',true)">Kembali</a>';
          $data[$jar][]  = '';
                    $data[$jar][]  = '';
          $data[$jar][]  = '';
          $data[$jar][]  = '';
          $data[$jar][]  = '';
          $data[$jar][]  = '';
          $data[$jar][]  = '';

          $data[$jar][]  = '';
          $data[$jar][]  = '';
      }
      // Output menggunakan JSON
      $output = [
        "draw"              => $_POST['draw'],
        "recordsTotal"      => $this->M_pertanyaan_up->count_all('v_pertanyaan'),
        "recordsFiltered"   => $this->M_pertanyaan_up->count_filtered('v_pertanyaan', $column_order, $column_search, $order, $parent),
        "data"              => $data,
        "parent"            => $parent,
      ];

      echo json_encode($output);
    }
  }

  public function save_siswa()
  { 
    // $data['folder'] = $this->M_pertanyaan_uk->statusfolder();
    // var_dump($data['folder']); 
    if (!$this->input->is_ajax_request()) {
      show_404();
    } else {

       $simpan = $this->M_pertanyaan_up->save_siswa();
    
    
      if ($simpan) {
        $this->outputs['status']    = true;
        $this->outputs['message']   = "Data berhasil disimpan !";
        // $this->outputs['grupform'] = $this->M_pertanyaan_uk->tampil_data()->result();
      }

      echo json_encode($this->outputs);
      
    }
  }

  public function edit_siswa()
  {
    if (!$this->input->is_ajax_request()) {
      show_404();
    } else {
      $siswa = $this->M_pertanyaan_up->get_siswa_by_id();
      if ($siswa->num_rows() > 0) {
        $this->outputs['data'] = $siswa->row();
        $this->outputs['status']  = true;
      }

      echo json_encode($this->outputs);
    }
  }

  public function update_siswa()
  {
    if (!$this->input->is_ajax_request()) {
      show_404();
    } else {
      $update = $this->M_pertanyaan_up->update_siswa();
      if ($update) {
        $this->outputs['status']  = true;
        $this->outputs['message'] = "Data berhasil diupdate !";
      }

      echo json_encode($this->outputs);
    }
  }

  public function delete_siswa()
  {
    if (!$this->input->is_ajax_request()) {
      show_404();
    } else {
      $delete = $this->M_pertanyaan_up->delete_siswa();
      if ($delete) {
        $this->outputs['status']  = true;
        $this->outputs['message'] = "Data berhasil dihapus !";
      }

      echo json_encode($this->outputs);
    }
  }

  
  public function getFormAspek(){ 
    // POST data 
    $postData = $this->input->post();
    
    // load model 
    $this->load->model('M_pertanyaan_up');
    
    // get data 
    $data = $this->M_pertanyaan_up->getFormAspek($postData);
    echo json_encode($data); 
  }


}// end class
