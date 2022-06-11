<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
          



          $this->load->model('M_pengawas','tb_pengawas');
          header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
          header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

     }
	public function index()
	{	$this->load->model('M_pengawas','tb_pengawas');
          $data['title'] = 'Data Pengawas';
		// $this->load->view('welcome_message');
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('templates/datatables');
		$this->load->view('templates/footer');
	}

	public function ajax_list()
     {    
          $list = $this->tb_pengawas->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $a) {
               $no++;
               $row = array();
               $row[] = $no;
               $row[] = $a->nama_pengawas;
               $row[] = $a->jabatan;
               // $row[] = $a->grup;
               
               
               
               

               $data[] = $row;
          }

          $output = array(
                              "draw" => $_POST['draw'],
                              "recordsTotal" => $this->tb_pengawas->count_all(),
                              "recordsFiltered" => $this->tb_pengawas->count_filtered(),
                              "data" => $data,
                    );
          //output to json format
          echo json_encode($output);
     }
}
