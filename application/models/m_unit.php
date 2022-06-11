<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_unit extends CI_Model {
 
    var $table = 'v_unit_grup';
    var $column_order = array(null, 'nama_unit','nama_grup','nama_form','alamat','nama_pj'); //set column field database for datatable orderable
    var $column_search = array('nama_unit','nama_grup','nama_form','alamat','nama_pj'); //set column field database for datatable searchable 
    var $order = array('id_unit' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function tampil_data()
    {
        
        return $this->db->get('tb_unit');  // lalu buat view 
    }
    
    //     public function grup_user(){
    //         $this->db->where('tb_unit_pengawas.username', $this->session->userdata('username'));
    //         return $this->db->get('tb_unit_pengawas')->result();
    // }

    public function input_data($data,$tabel)
        {             
                $data = array(
                        'nama_unit' => $data['nama_unit'],
                        
                        'id_grup_pengawas' => $data['id_grup_pengawas'],
                        'id_form' => $data['id_form'],
                        'alamat' => $data['alamat'],
                        'nama_pj' => $data['nama_pj']
                        
                        );

                $this->db->insert($tabel, $data);

        }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);

    }

    public function edit_data($where,$table)
    {
        return $this->db->GET_where($table,$where);
       

    }

    public function update_data($where, $data, $table )
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
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
 
    function get_datatables()
    {
        $this->_get_datatables_query(); //ini adalaah method private
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        // $this->db->join('tb_grup_pengawas', 'tb_pengawas.grup = tb_grup_pengawas.id_grup_pengawas');
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function tampil_form()
    {
        // memanggil data di database tb_user
        return $this->db->get('tb_form'); // lalu buat view user
    }

    public function get_user_grup()
    {
        // memanggil data di database tb_user
        return $this->db->get('tb_form'); // lalu buat view user
    }

    
 
}