<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=1){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('m_profile_m');
		$this->load->helper('url');
	}

	public function index()
	{
		$table="md_mentor";
		$data1['notifikasi'] = $this->m_profile_m->read_notification()->result();
		$data2['md_mentor'] = $this->m_profile_m->read_profile($table)->result();
		$data = $data1+$data2;
		if($this->input->is_ajax_request()){
			$this->load->view('m_profile_v',$data);
		}else{
			$this->template->load('m_static_v','m_profile_v',$data);
		}
		
	}

	
}
