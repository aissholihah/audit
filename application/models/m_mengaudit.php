<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Mengaudit extends CI_Model
{
	public function get_soal($nama_aspek) 
	{
		$this->db->select('*') ;
    	$this->db->from('v_pertanyaan'); 
    	$this->db->like('nama_aspek',$nama_aspek);
    	$this->db->order_by('id_aspek', 'ASC');
    	$this->db->limit(3);
    
    	return $this->db->get()->result(); 

	}
}//end class

