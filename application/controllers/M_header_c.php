<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_header_c extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('m_header_m');
    }

	function index(){
        $mentor_id = $this->session->userdata('id');
        $data['notifikasi'] = $this->m_header_m->read($mentor_id)->result();
        $this->load->view('m_header_v',$data);
    }

    
}
