<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawasan extends CI_Controller {

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
			$this->load->model('M_pengawasan','tb_penilaian');
			// $this->load->model('M_unit','v_unit_grup');
		}
          
          // $this->simple_login_admin->cek_login();
          $this->load->model('M_pengawasan','v_pengawasan');
          // header('Access-Control-Allow-Origin: *');
          // header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
          // header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

     }


     function inv(){
        $x['invoice']=$this->M_pengawasan->get_no_invoice();
        $this->load->view('v_invoice',$x);
    }
    function simpan_invoice(){
        $no_invoice=$this->input->post('no_invoice');
        $this->M_pengawasan->simpan_invoice($no_invoice);
        redirect('admin/pengawasan/inv');
    }

	public function index()
	{
		// $data['gruppengawas'] = $this->M_grup_pengawas->tampil_data()->result();
		// $this->load->view('welcome_message');
		// $data['tampil_data']=$this->M_pengawasan->get_data_pengawasan();
		// var_dump($data['tampil_data']);
		
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/pengawasan');
		// $this->load->view('bank_soal');
		$this->load->view('user/footer');
	}

	public function tambah_aksi()
	{	$a=$this->input->post();
		echo "ini adalah post "; print_r($a);

		echo "<br>";

		foreach ($a as $key=> $value)
		{
			echo "pertanyaan yang ke : ".$key." nilainya = ".$value."<br>";
			echo "<br />";
		}

		echo "aku maumanggil value 441 ahh~~"; echo $a['44-1'];
		$b=array_keys($a);

          $this->load->model('M_pertanyaan_uk','v_pertanyaan');
          echo '<br> <br> <br>';
          $data['pertanyaan']=$this->M_pengawasan->get_data();
          echo "aidi nya adalah = {$data['pertanyaan'][0]->id_pertanyaan} <br>";
          echo '<br> <br> <br>';
          print_r($data);

          // foreach($b as $p) {
          // 	echo $p."<br>";
          // 	// nge save data.
          // }

		//ambil data dari tabel pertanyaan

		// //menangkap inputan dari form yg methodny POST
		// $nama_pengawas			= $this->input->POST('nama_pengawas');	// inget POST('berdasarkan name di tag input')
		
		// $jabatan_pengawas 			= $this->input->POST('jabatan_pengawas');
		// $grup 			= $this->input->POST('grup');
		// // $data['password'] =    md5($this->input->post('password'));

		// // setelah data dari form ditangkap, datanya akan diubah jadi array
		// $data = array (
		// 	'nama_pengawas'	=>$nama_pengawas,			
		// 	'jabatan_pengawas'			=>$jabatan_pengawas,
		// 	'grup'	=>$grup,	
		// );

		// // biar $data masukk ke database tb_pengawas
		// $this->M_pengawas->input_data($data,'tb_pengawas');
		//$this->load->view('user/header');
		//$this->load->view('user/sidebar');
		//$this->load->view('user/topbar');
		//$this->load->view('user/ais');
		// $this->load->view('bank_soal');
		//$this->load->view('user/footer');

		// redirect ('admin/pengawas/index');


	}

	public function bikin_id(){
		// $id="ais";
		$id=$this->session->userdata('id_pengawas');
	// $list = $this->v_unit_grup->get_datatables();
	//$sess_pengawas = $this->session->userdata('id_pengawas');
	// var_dump($list);
	// $id_pengawasan = $sess_pengawas.'-'.$time();
	$data['id_pengawasan'] = $this->M_pengawasan->bikin_id($id);
	// $id_pengawasan = $this->M_pengawasan->bikin_id($id);
	var_dump($id_pengawasan);
	var_dump($id);
	}

	public function tes(){
		// buat tes input data pengawasan udah bener belom .
		$id=$this->session->userdata('id_pengawas');
		$data['id_pengawasan'] = $this->M_pengawasan->bikin_id($id); // cara ngirim ini ke view gimana? tar biar inputannya dibikin hidden, erus value nya di set ini, kek ngeset tanggal. terus abis itu name nya baru masuk ke dibawah ini.
		$id_pengawasan 			= $id.".".time();	 
		// $id_pengawasan				= $this->M_pengawasan->bikin_id($id);
		$id_unit 					= $this->input->POST('id_unit');		
		//$alamat 					= $this->input->POST('alamat');
		$tanggal_audit 			= $this->input->POST('tanggal_audit');
		$id_grup_pengawas 			= $this->input->POST('id_grup_pengawas');
		$nama_pj_unit 				= $this->input->POST('nama_pj_unit');
		$jabatan_pj_unit 			= $this->input->POST('jabatan_pj_unit');
		$id_form					= $this->input->POST('id_form');
		echo"OIIII"."<br>";
		// setelah data dari form ditangkap, datanya akan diubah jadi array
		$data = array (
			'id_pengawasan'		=>$id_pengawasan,
			'id_pengawas'			=>$id,
			'id_unit'				=>$id_unit,
			'id_form'				=>$id_form,			
			//'alamat'				=>$alamat,
			'tanggal_audit' 		=> $tanggal_audit,
			'id_grup_pengawas' 		=> $id_grup_pengawas,
			'nama_pj_unit' 		=> $nama_pj_unit,
			'jabatan_pj_unit'		=> $jabatan_pj_unit		
			
		);
		var_dump($data);
		// biar $data masukk ke database tb_pengawas
		$this->M_pengawasan->input_data_pengawasan($data,'tb_pengawasan');

		
	}

	public function insert_data(){
		// $data['g_unit'] = $this->M_unit->get_data($id)->result();
		// ini adalah input data pengawasan
		$id=$this->session->userdata('id_pengawas');
		$id_pengawasan 			= $id.".".time();	
		$id_unit 					= $this->input->POST('id_unit');		
		$tanggal_audit 			= $this->input->POST('tanggal_audit');
		$id_grup_pengawas 			= $this->input->POST('id_grup_pengawas');
		$nama_pj_unit 				= $this->input->POST('nama_pj_unit');
		$jabatan_pj_unit 			= $this->input->POST('jabatan_pj_unit');
		$id_form					= $this->input->POST('id_form');		
		// setelah data dari form ditangkap, datanya akan diubah jadi array
		$data = array (
			'id_pengawasan'		=>$id_pengawasan,
			'id_pengawas'			=>$id,
			'id_unit'				=>$id_unit,
			'id_form'				=>$id_form,			
			//'alamat'				=>$alamat,
			'tanggal_audit' 		=> $tanggal_audit,
			'id_grup_pengawas' 		=> $id_grup_pengawas,
			'nama_pj_unit' 		=> $nama_pj_unit,
			'jabatan_pj_unit'		=> $jabatan_pj_unit		
		);
		// dibawah adalah input data pertanyaan
		$this->M_pengawasan->input_data_pengawasan($data,'tb_pengawasan');
		
		/*$dt = array (
			'id_pengawasan'		=>$id_pengawasan);
		$where = $dt;
		$this->db->where('id', $id);
		$this->db->delete('tb_penilaian',$where);*/
		$kecuali = array(
		$id_pengawasan 		= $id.".".time(),	
		$id_unit 					= $this->input->POST('id_unit'),		
		$tanggal_audit 			= $this->input->POST('tanggal_audit'),
		$id_grup_pengawas 			= $this->input->POST('id_grup_pengawas'),
		$nama_pj_unit 				= $this->input->POST('nama_pj_unit'),
		$jabatan_pj_unit 			= $this->input->POST('jabatan_pj_unit'),
		$id_form					= $this->input->POST('id_form')		
		);
		// echo"kecualii";
		// $lihat=$this->input->post($kecuali);
		// var_dump($lihat);
		// echo"<br><br><br>";
		

		

		$a=$this->input->post();
		unset($a['id_unit']);
		unset($a['tanggal_audit']);
		unset($a['id_grup_pengawas']);
		unset($a['nama_pj_unit']);
		unset($a['jabatan_pj_unit']);
		unset($a['id_form']);
		
		$b=array_keys($a);
		//$b=array_pop($c);
		echo "ini isi dolar a";
		var_dump($a);
		echo count($b)-1;
		for($i=0; $i<count($b)-1; $i++){
			$jawaban=$this->input->post($b[$i]);
			$expljw=explode("-", $b[$i]);
			echo $b[$i].'<br>';
			$idaspek=$expljw[0];
			$idpert=$expljw[1];
			$dataa[]=[
				'id_pengawasan' => $id_pengawasan,
				'id_form' => $id_form,
				'id_aspek' =>$idaspek,
				'id_pertanyaan'=>$idpert,
				'jawaban' =>$jawaban

			];
			//echo 'no.'.$i.'id aspek='.$idaspek.' - id pertanyaan='.$idpert.' - jawaban='.$jawaban.'<br>';
			//$result=$this->db->insert_batch('tb_penilaian',$data);
		}
		echo"ini dolar data";
		
		$result=$this->db->insert_batch('tb_penilaian',$dataa);
		echo "selamat";
		var_dump($result);
		redirect ('user/pengawasan/hitung_skor_up/'.$id_pengawasan.'');


		// redirect ('user/pengawasan/hitung_skor');
	}// end insert data fix

	

	public function hitung_skor(){
		// $id_pengawasan = $this->uri->segment();
		$id = $this->uri->segment(4);
		// $data['page']	= ($this->uri->segment(4))? $this->uri->segment(4) :0;
		// echo $id;
		$where = array ('id_pengawasan'=>$id);
		$data['history']=$this->M_pengawasan->get_data_pengawasan($where);
		$data['aspek']=$this->M_pengawasan->aspek()->result_array();
		$data['v_pengawasan']=$this->M_pengawasan->v_pengawasan();
		var_dump($data['history']); 
		echo "<br>";
		// ngga dipake
		// $where = array (
		// 	'id_pengawasan'=>$id, 
		// 	'jenis_jawaban' => $jenis_jawaban
		// );
		$data['subaspek']=$this->M_pengawasan->skor($id)->result_array(); // buay
		// $data['nilai_standar']=$this->M_pengawasan->nilai_standar()->result();
		var_dump($data['subaspek']);
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/nilai_audit_asli',$data);
		$this->load->view('user/footer');	

	} // end hitung skor

	public function skor_up(){
		$id = $this->uri->segment(4);
		$where = array ('id_pengawasan'=>$id);
		$data['history']=$this->M_pengawasan->history_unit($where);
		$data['aspek']=$this->M_pengawasan->aspek_up()->result_array();
		$data['subaspek']=$this->M_pengawasan->skor_up($id)->result_array();
				$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/nilai_audit_asli_up',$data);
		$this->load->view('user/footer');
	}


	public function hitung_skor_up(){
		 
		// cara dapetin id pengawasan howw???
		// $id=$this->session->userdata('id_pengawas');
		// $id_pengawasan = $this->uri->segment(4);
		// $id_pengawasan = 18.1653362136;
		$id_pengawasan = $this->uri->segment(4);
		$jenis_jawaban = "Ya";
		$total=count(1)*100;
		$where = array (
			'id_pengawasan'	=>$id_pengawasan, 
			'jawaban' 	=> $jenis_jawaban,
			 // 'total'		=> $total

		);	

			
		var_dump($where);		
		// buat fungsi yang akan dipake di M_administrator
		$data['subaspek']=$this->M_pengawasan->hitung_skor($where);
		echo "jdajkdhjksahdjkas";
		echo "<br><br>";
		var_dump($data['subaspek']);

		$parent_id = '0';
		$id_form  = '1';
			$where= array(
			'id_form' =>$id_form,
			'parent_id' => $parent_id
		);
		
		// if ($id_form =='1') {
		// 	$id_form  = '1';
		// 	$where= array(
		// 	'id_form' =>$id_form,
		// 	'parent_id' => $parent_id
		// );
		// } else{
		// 	$id_form  = '2';
		// 	$where= array(
		// 	'id_form' =>$id_form,
		// 	'parent_id' => $parent_id
		// );

		// }
		// $where= array(
		// 	'id_form' =>$id_form,
		// 	'parent_id' => $parent_id
		// );

		
		
		
		$data['aspek']=$this->M_pengawasan->aspekk($where);
		// $data['subaspek']=$this->M_pengawasan->skor()->result_array($where,'tb_penilaian'); 
		// $data['nilai_standar']=$this->M_pengawasan->nilai_standar()->result();

		echo "ini variable subaspek";
		var_dump($data['subaspek']);
		
		

		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/nilai_audit',$data);
		$this->load->view('user/footer');	

	} // end hitung yg query builder skor



	


	// public function simpan(){

	// 	$data = array(
	// 		'jawaban' => $_POST['inputan[]']

	// 	);

	// 	$data=$this->input->post();

	// 	Array{
	// 		{'name'=>'value'},
	// 		{'name2'=> 'value2'}
	// 	}

	// 	//fungsi php untuk mendapatkan name dari array $data

	// 	Array{
	// 		[0]=>'name',

	// 	}

	// 	$this->input->post();		

	// 	for ($i = 0; $i < count($data['jawaban']); $i++)  {
 //            echo $CodeWallTutorialArray[$i] ."<br />";
 //        }*/
	// }

	// public function add_data(){
	// 	/*1. ditangkep dulu semua inputan
	// 	2. diitung sek jumlah inputane
	// 	3. baru dikirim ke db pake for*/

	// 	$inputan = $_POST['inputan'];				
	// 	$jumlah_inputan = count($inputan);
	// 	for($x=0;$x<$jumlah_inputan;$x++){
	// 		$data['inputan'.$x]=> $this->input->post('inputan'.$x);
	// 	}
	// 	$data = [
	// 		'field tabel' => 'name inputanku'
	// 		'jawaban' 	=> $this->input->post('$inputan');
	// 	];	// 1. nangkep data

	// 	$jumlah_inputan = count($data['jawaban']); // 2. diitung jumlah array ne

	// 	// 3. baru dimasukin ke db sesuai jumlahnya,,
	// 	for($x=0;$x<$jumlah_inputan;$x++){
	// 		$this->db->insert('audit', $data);
	// 	}		
	// }


	public function up1(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/ais');
		$this->load->view('user/footer');

	}

	public function uk2(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/uk2');
		$this->load->view('user/footer');

	}

	public function uk3(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/uk3');
		$this->load->view('user/footer');

	}

	public function uk4(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/uk4');
		$this->load->view('user/footer');

	}

	public function uk5(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/uk5');
		$this->load->view('user/footer');

	}

	public function uk6(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/uk6');
		$this->load->view('user/footer');

	}

	public function upp1(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/up1');
		$this->load->view('user/footer');

	}

	public function up2(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/up2');
		$this->load->view('user/footer');

	}

	public function up3(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/up3');
		$this->load->view('user/footer');

	}

	public function up4(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/up4');
		$this->load->view('user/footer');

	}
	public function up5(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/up5');
		$this->load->view('user/footer');

	}
	public function up6(){
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/up6');
		$this->load->view('user/footer');

	}

	// public function penyihir($id){
	// 	$where = array ('id_unit'=>$id);
	// 	$data['form'] = $this->M_unit->tampil_form()->result();
	// 	$data['data_instansi'] = $this->M_pengawasan->get_data_instansi($where,'v_unit_grup')->result();
	// 	$data['tanggal'] = date("Y-m-d H:i:s");
	// 	var_dump($data['tanggal']);
	// 	$this->load->view('user/header');
	// 	$this->load->view('user/sidebar');
	// 	$this->load->view('user/topbar');
	// 	$this->load->view('user/wizard',$data);
	// 	$this->load->view('user/footer');

	// }

	public function penyihir($id){
		$where = array ('id_unit'=>$id);
		$id=$this->session->userdata('id_pengawas');
		$data['id_pengawasan'] = $this->M_pengawasan->bikin_id($id);
		$data['form'] = $this->M_unit->tampil_form()->result();
		$data['data_instansi'] = $this->M_pengawasan->get_data_instansi($where,'v_unit_grup')->result();
		$data['tanggal'] = date("Y-m-d H:i:s");
		// var_dump($data['tanggal']);
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/wizard',$data);
		$this->load->view('user/footer');

	}

	public function penyihir_up($id){
		$where = array ('id_unit'=>$id);
		$data['form'] = $this->M_unit->tampil_form()->result();
		$data['data_instansi'] = $this->M_pengawasan->get_data_instansi($where,'v_unit_grup')->result();
		$data['tanggal'] = date("Y-m-d H:i:s");
		// var_dump($data['tanggal']);
		$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/wizard_up',$data);
		$this->load->view('user/footer');

	}



	public function w3wizard(){
		
		$this->load->view('user/w3wizard');
		

	}


	public function inputBarang()
	{
		$this->load->model('M_pengawasan');
		$kode_barang = $this->BarangModel->CreateCode();
		echo $kode_barang;   
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
		$data ['arsip'] = $this->M_pengawas->edit_data($where,'tb_pengawas')->result();
		// result() untuk mengenerate hasil query menjadi array.
		// meload view
		

	}

	public function update()
	{	
		
		$id							= $this->input->post('id_pengawas');
		$nama_pengawas					= $this->input->POST('nama_pengawas');	// inget POST('berdasarkan name di tag input')
		$jabatan_pengawas				= $this->input->POST('jabatan_pengawas');
		


		
		
			$data = array (
				
			'nama_pengawas'			=>$nama_pengawas,
			'jabatan_pengawas'		=>$jabatan_pengawas,
			
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
     	$sesigrup=$this->session->userdata('id_grup_pengawas');
          $list = $this->v_pengawasan->get_datatables($sesigrup);
          
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $a) {
          //	if($a->id_grup_pengawas==$this->session->userdata('id_grup_pengawas')){
               $no++;
               $row = array();
               $row[] = $no;
               $row[] = $a->nama_pengawas;
               $row[] = $a->nama_unit;
               $row[] = $a->tanggal_audit;
               $row[] = $a->nama_grup;

                $row[] = '<button id="'.$a->id_pengawasan.'" onclick="editrow('.$a->id_pengawasan.')"class="btn btn-sm btn-success">Excel</button>';

               if ($a->id_form==1) {

               	$row[] = '<button id="'.$a->id_unit.'" onclick="window.open(\'pengawasan/hitung_skor/'.$a->id_pengawasan.'\',\'_blank\');" class="btn btn-sm btn-primary">Nilai</button>';
               }else{$row[] = '<button id="'.$a->id_unit.'" onclick="window.open(\'pengawasan/skor_up/'.$a->id_pengawasan.'\',\'_blank\');" class="btn btn-sm btn-warning">Nilai</button>';

               }
               
               // $row[] = '<button id="'.$a->id_pengawasan.'" onclick="hapusrow('.$a->id_pengawasan.');" class="btn btn-sm btn-danger">Hapus</button>';
              
               // $row[] = '<button id="'.$a->id_unit.'" onclick="window.open(\'pengawasan/history/'.$a->id_unit.''.$a->nama_unit.'\',\'_blank\');" class="btn btn-sm btn-warning">History</button>';
               

               $data[] = $row;
           }
          //}

          $output = array(
                              "draw" => $_POST['draw'],
                              "recordsTotal" => $this->v_pengawasan->count_all(),
                              "recordsFiltered" => $this->v_pengawasan->count_filtered($sesigrup),
                              "data" => $data,
                    );
          //output to json format
          echo json_encode($output);
     } //end ajax_list()

     public function history()
     {
     	$id = $this->uri->segment(4);
     	$where = array ('id_unit'=>$id);
		$data['history']=$this->M_pengawasan->history_unit($where);
		$data['title']= $id; 
		var_dump($id);
     	$this->load->view('user/header');
		$this->load->view('user/sidebar');
		$this->load->view('user/topbar');
		$this->load->view('user/history_pengawasan',$data);
		// $this->load->view('bank_soal');
		$this->load->view('user/footer');

     }


     public function excel()
     {
     	// call panggil_data() kayakke ini si,
     	$data['tampil_data']=$this->M_pengawasan->get_data_pengawasan();
     	// manggil 2 file dari library excel yaitu didalam folder: 1. classes/PHPExcel.php dan 2. Classes/Writer/Excel2007.php
     	// APPATH berasal dari application (pov terhadap folder application) t4 penyimpanan php excel kita
     	require (APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
     	require (APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

     	// bikin object

     	$object = new PHPExcel();
     	// terus dikasi properties
     	$object->getProperties()->setCreator("UPT KEARSIPAN UNS");
     	$object->getProperties()->setLastModifiedBy("UPT KEARSIPAN UNS");
     	$object->getProperties()->setTitle("FORMULIR AUDIT SISTEM KEARSIPAN INTERNAL PERGURUAN TINGGI NEGERI PADA UNIT KEARSIPAN");

     	// setting posisi seet yang akan dipake 	
     	$object->setActiveSheetIndex(0);
     	// konfersikan data yg dimiliki di tb_mahasiswa ke dalam format excel
     	$object->getActiveSheet()->setCellValue('B1','FORMULIR ASKI PTN UK B.1.1');
     	$object->getActiveSheet()->setCellValue('B3','FORMULIR AUDIT SISTEM KEARSIPAN INTERNAL');
     	$object->getActiveSheet()->setCellValue('B4','PERGURUAN TINGGI NEGERI');
     	$object->getActiveSheet()->setCellValue('B5','PADA UNIT KEARSIPAN');
     	$object->getActiveSheet()->setCellValue('B8','ASPEK PENGELOLAAN ARSIP DINAMIS');
     	$object->getActiveSheet()->setCellValue('B9','SUB ASPEK PENCIPTAAN ARSIP');
     	$object->getActiveSheet()->setCellValue('C12','Nama Instansi');
     	$object->getActiveSheet()->setCellValue('C14','Unit Kearsipan');
     	$object->getActiveSheet()->setCellValue('C16','Alamat');

     	$object->getActiveSheet()->setCellValue('G12','');
     	$object->getActiveSheet()->setCellValue('G14','');
     	$object->getActiveSheet()->setCellValue('G16','');

     	$baris=12;
     	$no =1; 

     	foreach ($data['tampil_data'] as $p){
     		$object->getActiveSheet()->setCellValue('G12'.$baris,$p->nama_unit);
     		$object->getActiveSheet()->setCellValue('G14'.$baris,$p->nama_pengawas);
     		$object->getActiveSheet()->setCellValue('G16'.$baris,$p->nama_form);

     		$baris++;
     	}

     	// nentuin nama output file yg akan di ekxport
     	$filename = "hasil".'.xlsx';
     	$object->getActiveSheet()->setTitle('hasil');
     	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
     	header('Content-Disposition: attachment;filename="'.$filename.'"');
     	header('Chache-Control: max-age=0');

     	$writer = PHPExcel_IOFactory ::createWriter($object, 'Excel2007');
     	$writer->save('php://output');
     	exit; 




     	
     }//end excel ais()

     public function excell(){

     }


} //end class
