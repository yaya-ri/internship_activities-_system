<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_topic_form_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('s_topic_form_m');
		$this->load->model('s_header_m');
		$this->load->helper('url');
	}

	public function index(){
		$student_id = $this->session->userdata('id');
        $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
		$data2['md_student'] = $this->s_topic_form_m->read_topic()->result();
		$data = $data1 + $data2;
		if($this->input->is_ajax_request()){
			$this->load->view('s_topic_form_v',$data);
		}else{
			$this->template->load('static_v','s_topic_form_v',$data);
		}
		
	}

	function update_topic(){
		$student_id = $this->session->userdata('id');
		$judul = $this->input->post('judul');
		$mentor1 = $this->input->post('mentor1');
		$mentor2 = $this->input->post('mentor2');
		$mulai = $this->input->post('mulai');
		$selesai = $this->input->post('selesai');
		$deskripsi = $this->input->post('deskripsi');

		$data_project = array(
			'project_title' => $judul,
			'project_started' => $mulai,
			'project_expired' => $selesai,
			'project_description' => $deskripsi
			);

		// $data_mentor = array(
		// 	'mentor_id' => $mentor1,
		// 	'mentor_id' => $mentor2
		// 	);
		$this->s_topic_form_m->update_topic($student_id,$data_project,'mg_project');
		//$this->s_formTopik_m->input_data($data_mentor,'md_project');
		redirect(base_url("index.php/s_topic_form_c"));


	}
}
