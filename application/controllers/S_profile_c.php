<?php

class S_profile_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=2){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('s_profile_m');
		$this->load->model('s_header_m');
		$this->load->helper('url');
	}

	function index(){
		$table="md_student";
		$student_id = $this->session->userdata('id');
        $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
		$data2['md_student'] = $this->s_profile_m->read_profile($table)->result();
		$data = $data1 + $data2;
		if($this->input->is_ajax_request()){
			$this->load->view('s_profile_v',$data);
		}else{
			$this->template->load('static_v','s_profile_v',$data);
		}
		
	}
}

?>
