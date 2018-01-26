<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('signup');
	}

}

/* End of file register.php */
/* Location: ./application/controllers/register.php */