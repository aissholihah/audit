<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pertanyaan_uk extends CI_Model
{
  private $table = 'v_pertanyaan';
  private $add='tb_pertanyaan';

  public function tampil_data_form()
  {
    // memanggil data di database tb_user
    return $this->db->get('tb_form');  // lalu buat view user
  }

  public function tampil_data_aspek()
  {
    // memanggil data di database tb_user
    $this->db->select('*');
    
    $this->db->where('id_form', 1); 

    return $this->db->get('tb_aspek');  // lalu buat view user
  }

  // Get City departments
  function getCityDepartment($postData){
    $response = array();
 
    // Select record
    $this->db->select('id,depart_name');
    $this->db->where('city', $postData['city']);
    $q = $this->db->get('department');
    $response = $q->result_array();

    return $response;
  }

  // Get City departments
  function getFormAspek($postData){
    $response = array();
 
    // Select record
    $this->db->select('id_aspek,nama_aspek');
    $this->db->where('id_form', $postData['id_form']);
    $q = $this->db->get('tb_aspek');
    $response = $q->result_array();

    return $response;
  }

  public function save_siswa()
  {
    $data = [
        //nama field => name inputan
        'id_pertanyaan' =>$this->input->post('id_pertanyaan'),
        'kode_pertanyaan' => $this->input->post('kode_pertanyaan'),
        'id_form'   => $this->input->post('id_form'),
        'id_aspek'   => $this->input->post('id_aspek'),

        'id_pertanyaan'   => $this->input->post('id_pertanyaan'),
        'pertanyaan'   => $this->input->post('pertanyaan'),

        'sub' => $this->input->post('sub'),
        'jawaban' => $this->input->post('jawaban'),
        'jenis_jawaban' => $this->input->post('jenis_jawaban'),
        'parent_id' =>$this->input->post('ID_parent'),
        'cell_y' =>$this->input->post('cell_y'),
        'cell_t' =>$this->input->post('cell_t'),

    ];

    $this->db->insert($this->add, $data);
    return $this->db->affected_rows();
  }

  public function statusfolder(){
    return $this->db->get('folder')->result_array();

  }

  public function update_siswa()
  {
    $data = [
      'id_pertanyaan' =>$this->input->post('id_pertanyaan'),
        'kode_pertanyaan' => $this->input->post('kode_pertanyaan'),
        'id_form'   => $this->input->post('id_form'),
        'id_aspek'   => $this->input->post('id_aspek'),
        'id_pertanyaan'   => $this->input->post('id_pertanyaan'),
        'pertanyaan'   => $this->input->post('pertanyaan'),

        'sub' => $this->input->post('sub'),
        'jawaban' => $this->input->post('jawaban'),
        'jenis_jawaban' => $this->input->post('jenis_jawaban'),
        'parent_id' =>$this->input->post('ID_parent'),
        'cell_y' =>$this->input->post('cell_y'),
        'cell_t' =>$this->input->post('cell_t'),
      
    ];

    return $this->db->update($this->add, $data, [
      'id_pertanyaan' => $this->input->post('id_pertanyaan')
    ]);
  }

  public function delete_siswa()
  {
    return $this->db->delete($this->add, [
      'id_pertanyaan' => $this->input->post('id_pertanyaan')
    ]);
  }

  public function get_siswa_by_id()
  {
    $data = [
      'id_pertanyaan' => $this->input->get('id_pertanyaan')
    ];

    return $this->db->get_where($this->table, $data);
  }

  public function get_parent_id($parent)
  {
    $data = [
      'id_pertanyaan' => $parent
    ];

    return $this->db->get_where($this->table, $data);
  }
  public function get_parent($where,$table)
    {
        return $this->db->GET_where($table,$where);
       

    }
  private function _get_datatables_query($table, $column_order, $column_search, $order,$parent)
  {

    $this->db->from($table);
    $this->db->where('parent_id', $parent);
    $this->db->where('id_form', 1);
    $i = 0;

    foreach ($column_search as $item) {
      if ($_POST['search']['value']) {

        if ($i === 0) {
          $this->db->group_start();
          $this->db->like($item, $_POST['search']['value']);
        } else {
          $this->db->or_like($item, $_POST['search']['value']);
        }

        if (count($column_search) - 1 == $i)
          $this->db->group_end();
      }
      $i++;
    }

    if (isset($_POST['order'])) {


      $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    } else if (isset($order)) {
      $order = $order;
      $this->db->order_by(key($order), $order[key($order)]);
    }
  }

  public function get_datatables($table, $column_order, $column_search, $order, $parent, $data = null)
  { 
    $this->_get_datatables_query($table, $column_order, $column_search, $order, $parent);
    if ($_POST['length'] != -1)
      $this->db->limit($_POST['length'], $_POST['start']);
    if (!empty($data)) {
      $this->db->where($data);
    }
    $query = $this->db->get();
    return $query->result();
  }

  public function count_filtered($table, $column_order, $column_search, $order, $parent, $data = null)
  {
    $this->_get_datatables_query($table, $column_order, $column_search, $order, $parent);
    if (!empty($data)) {
      $this->db->where($data);
    }
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function count_all($table, $data = null)
  {
    if (!empty($data)) {
      $this->db->where($data);
    }

    $this->db->from($table);
    return $this->db->count_all_results();
  }
}// end class
