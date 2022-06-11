<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Pengawasan extends CI_Model
{
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

    ];

    $this->db->insert($this->add, $data);
    return $this->db->affected_rows();
  }
} //end class
