<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_detail_activity_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('s_detail_activity_m');
		$this->load->model('s_header_m');
		$this->load->helper('url');
	}


	public function read($activity_id){
		$student_id = $this->session->userdata('id');
        $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
		$data2['description'] = $this->s_detail_activity_m->read_activity_desc($activity_id)->result();
		$data3['mention']  = $this->s_detail_activity_m->read_mention($activity_id)->result();
		$data4['check']= $this->s_detail_activity_m->mention_check($activity_id)->result();
		$data5['path']= $this->s_detail_activity_m->path($student_id)->result();
		$data = $data1 + $data2 + $data3 + $data4 + $data5;
		if($this->input->is_ajax_request()){
			$this->load->view('s_detail_activity_v',$data);
		}else{
			$this->template->load('static_v','s_detail_activity_v',$data);
		}
		
	}

	public function mentor_mention(){
		$status			= 1;
		$nama_mentor 	= $this->input->post('mentor');
		$activity_id	= $this->input->post('id');
		$komentar		= $this->input->post('komentar');
		$date			= date('Y-m-d H:i:s');
		echo $date;
		$mentor_id = $this->s_detail_activity_m->get_mentor_id($nama_mentor)->row();
		// echo $status."<br>";
		// echo $activity_id."<br>";
		// echo $komentar."<br>";
		// echo $mentor_id->mentor_id."<br>";


		$data = array(
			'mention_status' => $status,
			'mention_chat'	 => $komentar,
			'activity_id'	 => $activity_id,
			'mentor_id'		 => $mentor_id->mentor_id,
			'mention_date'	 => $date
			);

		$this->s_detail_activity_m->mention_mentor($data,'mg_mention');
		redirect(base_url("index.php/s_detail_activity_c/read/$activity_id"));


	}

	
}
