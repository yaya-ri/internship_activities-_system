<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_activity_menu_c extends CI_Controller {


	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=2){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('s_header_m');
		$this->load->model('s_activity_menu_m');
		$this->load->helper('url');
	}

	public function index(){
		$student_id = $this->session->userdata('id');
        $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
        $data2['aktivitas'] = $this->s_activity_menu_m->menu($student_id)->result();
        $data = $data1 + $data2;
        //if($this->input->is_ajax_request()){
        	$this->load->view('s_activity_menu_v',$data);
        // }else{
        // 	$this->template->load('static_v','s_activity_menu_v',$data);
        // }
		
	}
}