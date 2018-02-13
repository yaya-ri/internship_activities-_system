<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_activity_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=1){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('m_activity_m');
		$this->load->helper('url');
	}

	public function index(){

		$data['md_student'] = $this->m_activity_m->read_student()->result();
		$this->template->load('m_static_v','m_activity_v',$data);
	}
}
