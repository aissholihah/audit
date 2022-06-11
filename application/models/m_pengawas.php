<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_pengawas extends CI_Model {
 
    var $table = 'v_pengawas';
    var $column_order = array(null, 'nama_pengawas','jabatan_pengawas','nama_grup'); //set column field database for datatable orderable
    var $column_search = array('nama_pengawas','jabatan_pengawas','nama_grup'); //set column field database for datatable searchable 
    var $order = array('id_pengawas' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function tampil_data()
    {
        
        return $this->db->get('tb_pengawas');  // lalu buat view 
    }

    public function input_data($data,$tabel)
        {
                // $this->nama_pengawas                = $data['nama_pengawas']; 
                // $this->jabatan_pengawas          = $data['jabatan_pengawas'];
                // $this->grup             = $data['grup'];
                // $this->username             = $data['username'];
                // $this->password             = $data['password'];
                // $this->role_id             = '2';
                        
               
                $data = array(
                        'nama_pengawas' => $data['nama_pengawas'],
                        'jabatan_pengawas' => $data['jabatan_pengawas'],
                        'grup' => $data['grup'],
                        'username' => $data['username'],
                        'password' => $data['password'],
                        'role_id' =>'2'
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

    
 
}