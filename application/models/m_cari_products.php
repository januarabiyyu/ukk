<?php 
 
class m_cari_produk extends CI_Model{
	function cari(){
        $this->db->select('*');
        $this->db->from('rute');
        $this->db->where('rute_from', $this->input->get('rute_from'));
        $this->db->where('rute_to', $this->input->get('rute_to'));
        $this->db->like('depart_at', $this->input->get('depart_at'));
        $this->db->join('transportation', 'rute.id_transportation = transportation.id_transportation');
        return $this->db->get()->result();	
    }
    function rute_form(){
        return $this->db->get('tb_rute');	
    }
    function rute_to(){
		return $this->db->get('tb_rute');
}