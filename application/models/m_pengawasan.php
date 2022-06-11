<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Pengawasan extends CI_Model
{

	var $table = 'v_pengawasan';
    var $column_order = array(null, 'nama_pengawas','nama_unit','tanggal_audit','nama_grup'); //set column field database for datatable orderable
    var $column_search = array('nama_pengawas','nama_unit','tanggal_audit','nama_grup'); //set column field database for datatable searchable 
    var $order = array('id_pengawasan' => 'asc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // function get_no_invoice(){
    //     $q = $this->db->query("SELECT MAX(RIGHT(no_invoice,4)) AS kd_max FROM tbl_invoice WHERE DATE(tanggal)=CURDATE()");
    //     $kd = "";
    //     if($q->num_rows()>0){
    //         foreach($q->result() as $k){
    //             $tmp = ((int)$k->kd_max)+1;
    //             $kd = sprintf("%04s", $tmp);
    //         }
    //     }else{
    //         $kd = "0001";
    //     }
    //     date_default_timezone_set('Asia/Jakarta');
    //     return date('dmy').$kd;
    // }
 
    // function simpan_invoice($no_invoice){
    //     $hasil=$this->db->query("INSERT INTO tbl_invoice (no_invoice) VALUES ('$no_invoice')");
    //     return $hasil;
    // }

    public function bikin_id($id){

        $sql = "SELECT MAX(MID(id_pengawasan,9,4)) AS no_pengawasan 
        FROM tb_pengawasan 
        WHERE MID(id_pengawasan,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')"; 


        $query = $this->db->query($sql);
        // *invoice= nama field*
        // *invoice_no = 
        if ($query-> num_rows() > 0) {
            $row = $query->row();
            $n = ((int)$row->no_pengawasan) + 1;
            $no= sprintf("%'.04d", $n);
        }else{ 
            $no = "0001";
        }
        $user= $id;
        $id_pengawasan = $user.".".date('ymd').$no;
        return $id_pengawasan;
    }

    public function input_data_pengawasan($data,$tabel){
        
        $data = array(
                        'id_pengawasan' => $data['id_pengawasan'],                        
                        'id_unit' => $data['id_unit'],
                        'id_pengawas' => $data['id_pengawas'],
                        'id_form' => $data['id_form'],
                        'tanggal_audit' => $data['tanggal_audit'],
                        'id_grup_pengawas' => $data['id_grup_pengawas'],
                        'nama_pj_unit' => $data['nama_pj_unit'],
                        'jabatan_pj_unit' => $data['jabatan_pj_unit']                        
                        );

                $this->db->insert($tabel, $data);
    }

    // dapetin data unit sesuai id yg mbo punya
    public function get_data_instansi($where,$table){
        return $this->db->GET_where($table,$where);
    }





    public function get_data(){
    $this->db->select('*') ;
    $this->db->from('v_pertanyaan'); 
    $this->db->where('id_form',1);
    // $this->db->order_by('id_pertanyaan', 'DESC');
    // $this->db->limit(2);
    // memanggil data di database tb_user
    return $this->db->get()->result(); 
    // memanggil data di database tb_user
    // return $this->db->get('v_pertanyaan');  // lalu buat view user
  }

  public function get_data_pengawasan($where)
  {
    $this->db->select('*') ;
    $this->db->from('v_pengawasan'); 
    $this->db->where($where);
    // $this->db->order_by('id_pertanyaan', 'DESC');
    // $this->db->limit(2);
    // memanggil data di database tb_user
    return $this->db->get()->result(); 
    // memanggil data di database tb_user
    // return $this->db->get('v_pertanyaan');  // lalu buat view user
  }






	public function get_soal($nama_aspek) 
	{
		$this->db->select('*') ;
    	$this->db->from('v_pertanyaan'); 
    	$this->db->like('nama_aspek',$nama_aspek);
    	$this->db->order_by('id_aspek', 'ASC');
    	$this->db->limit(10);
    
    	return $this->db->get()->result(); 

	}



	private function _get_datatables_query($id)
    {
         
        $this->db->from($this->table);
        $this->db->where('id_grup_pengawas',$id);
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables($id)
    {
        $this->_get_datatables_query($id); //ini adalaah method private
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        // $this->db->join('tb_grup_pengawas', 'tb_pengawas.grup = tb_grup_pengawas.id_grup_pengawas');
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered($id)
    {
        $this->_get_datatables_query($id);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function history_unit($where){
    $this->db->select('*') ;
    $this->db->from('v_pengawasan');
    $this->db->where($where);
    return $this->db->get()->result();
   }

   public function hitung_skor($where){
    $this->db->select("*,count(1)*100 as total",FALSE) ;
    $this->db->from('tb_penilaian');

    $this->db->join('tb_aspek', 'tb_penilaian.id_aspek = tb_aspek.id_aspek');
    $this->db->where($where);
    $this->db->group_by("tb_penilaian.id_aspek");
    return $this->db->get()->result_array(); 
   }

   public function aspekk($where){
    $this->db->select('*') ;
    $this->db->from('tb_aspek');
    $this->db->where($where);
    return $this->db->get()->result(); 

   }


   public function skor($id){
        $q = $this->db->query("SELECT a.*,b.parent_id, b.nama_aspek, b.nilai_standar, b.bobot, count(1)*100 as total FROM tb_penilaian a join tb_aspek b on a.id_aspek=b.id_aspek WHERE a.id_pengawasan=$id and a.jawaban='Ya' group by id_aspek;
            ");
        return $q;
    }
    public function skor_up($id){
        $q = $this->db->query("SELECT a.*,b.parent_id, b.nama_aspek, b.nilai_standar, b.bobot, count(1)*100 as total FROM tb_penilaian a join tb_aspek b on a.id_aspek=b.id_aspek WHERE a.id_pengawasan=$id and a.jawaban='Ya' group by id_aspek;
            ");
        // dikasi parameter buat nyimpen id pengawasannya
        return $q;
    }

    public function aspek(){
        $q = $this->db->query("SELECT * from tb_aspek where id_form='1' and parent_id='0';");
        return $q;
    }

    public function aspek_up(){
        $q = $this->db->query("SELECT * from tb_aspek where id_form='2' and parent_id='0';");
        return $q;
    }

    public function v_pengawasan(){
    $this->db->select('*') ;
    $this->db->from('v_pengawasan');
    
    return $this->db->get()->result();
   }


}//end class

