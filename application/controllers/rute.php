<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rute extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data_rute');
		$this->load->model('m_rute');
		$this->load->library('encryption');
		}
	 
	function index()
	{
        $data['tb_rute']= $this->m_data_rute->tampil_data()->result();
        $data['js_yang_dimuat'] = array('adminrute.js');
		$this->load->view('v_rute',$data);
	}
	function aksi_search(){
		$id = $this->input->post('id');	
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$transpotation_id = $this->input->post('transpotation_id');
		$where = array(
			'id' => $id,
			
			);
		$cek = $this->m_rute->cek_rute("tb_rute",$where)->num_rows();

		$this->load->view('v_rute',$where);

	}

}
