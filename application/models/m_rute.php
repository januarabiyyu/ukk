<?php 

class M_rute extends CI_Model{	
	function cek_rute($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}