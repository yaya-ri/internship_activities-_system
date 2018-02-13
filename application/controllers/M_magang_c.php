<?php

class M_magang_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=1){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('m_notification_m');
		$this->load->model('m_magang_m');
		$this->load->helper('url');
	}

	public function index(){
		$data2['mg_project'] = $this->m_magang_m->read_topic()->result();
		//$data2['nilai'] = $this->m_topic_m->nilai_edit($project_id)->result();
		//$data=$data1+$data2;
        $data1['notifikasi'] = $this->m_notification_m->read_notification()->result();

        $data = $data1+$data2;

		if($this->input->is_ajax_request()){
			$this->load->view('m_table_v',$data);
		}else{
			$this->template->load('m_static_v','m_magang_v',$data);
		}
		
	}
}
