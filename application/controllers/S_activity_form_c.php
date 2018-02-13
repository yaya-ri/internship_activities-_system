<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_activity_form_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') !="login"){
				redirect(base_url("login"));
		}
		$this->load->model('s_activity_form_m');
		$this->load->model('s_header_m');
		$this->load->helper('url');
	}

	public function index(){
		if($this->input->is_ajax_request()){
			$this->template->load('s_activity_form_v');

		}else{
			$student_id = $this->session->userdata('id');
        	$data['notifikasi'] = $this->s_header_m->read($student_id)->result();
        	//if($this->data->is_ajax_request()){
        		$this->load->view('s_activity_form_v',$data);
        	// }else{
        	// 	$this->template->load('static_v','s_activity_form_v',$data);
        	// }
			
		}
		
	}

	function input_activity(){
		//$project_id = $this->input->post('topik');
		$project_id = $this->session->userdata('id');
		$status = "To Do";
		$aktivitas = $this->input->post('aktivitas');
		$pengerjaan = $this->input->post('pengerjaan');
		$deskripsi = $this->input->post('deskripsi');
		$kendala = $this->input->post('kendala');
		$verifikasi=0;
		
		$data_activity = array(
			'project_id' => $project_id,
			'activity_status'=>$status,
			'activity_name' => $aktivitas,
			'activity_date' => $pengerjaan,
			'activity_description' => $deskripsi,
			'activity_problem' => $kendala,
			'activity_verification' =>$verifikasi
			);
		
		$this->s_activity_form_m->input_activity($data_activity,'mg_activity');
		// redirect(base_url("index.php/s_activity_form_c"));


	}
}
