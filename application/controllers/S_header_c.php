<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_header_c extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('s_header_m');
    }

	function index(){
        $student_id = $this->session->userdata('id');
        $data['notifikasi'] = $this->s_header_m->read($student_id)->result();
        $this->load->view('s_header_v',$data);
    }

    function header(){
    	$student_id = $this->session->userdata('id');
    	$data['notifikasi'] = $this->s_header_m->read($student_id)->result();
        $this->load->view('s_notifikasi_v',$data);
    }
    
}
