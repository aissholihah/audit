<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Aspek extends CI_Model
{
  private $table = 'v_aspek';
  private $add='tb_aspek';

  public function tampil_data()
  {
    // memanggil data di database tb_user
    return $this->db->get('tb_form');  // lalu buat view user
  }

  public function save_siswa()
  {
    $data = [
        'id_aspek' =>$this->input->post('id_aspek'),
        'nama_aspek' => $this->input->post('nama_aspek'),
        'id_form'   => $this->input->post('id_form'),

        'folder' => $this->input->post('folder'),
        'parent_id' =>$this->input->post('ID_parent'),

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
      'nama_aspek' => $this->input->post('nama_aspek'),
      'nama_aspek' => $this->input->post('nama_aspek'),
      'folder' => $this->input->post('folder'),
      // 'folder' => $this->input->post('folder'),
        'parent_id' =>$this->input->post('ID_parent'),
      
    ];

    return $this->db->update($this->add, $data, [
      'id_aspek' => $this->input->post('id_aspek')
    ]);
  }

  public function delete_siswa()
  {
    return $this->db->delete($this->add, [
      'id_aspek' => $this->input->post('id_aspek')
    ]);
  }

  public function get_siswa_by_id()
  {
    $data = [
      'id_aspek' => $this->input->get('id_aspek')
    ];

    return $this->db->get_where($this->table, $data);
  }

  public function get_parent_id($parent)
  {
    $data = [
      'id_aspek' => $parent
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
