<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_static_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=2){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('s_static_m');
		$this->load->model('s_header_m');
		$this->load->helper('url');
	}

	public function index(){
		$student_id = $this->session->userdata('id');
        $data1['md_student'] = $this->s_static_m->read($student_id)->result();
        $data2['notifikasi'] = $this->s_header_m->read($student_id)->result();
        $data = $data1 + $data2;
		$this->template->load('static_v','s_profile_v',$data);
	}
}
