<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_progress_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=2){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('s_header_m');
		$this->load->model('s_progress_m');
		$this->load->helper('url');
	}

	public function index(){
		$student_id = $this->session->userdata('id');
		$data;
		//if(null!==$this->s_progress_m->read()->num_rows()){
			$data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
			$data2['progress'] = $this->s_progress_m->read()->result();
			$data = $data1 + $data2;
			if($this->input->is_ajax_request()){
				$this->load->view('s_progress_v',$data);
			}else{
				$this->template->load('static_v','s_progress_v',$data);
			}
			
		// }else{
		// 	$data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
		// 	$data2['progress']=null;
		// 	$data = $data1 + $data2;
		// 	//$this->load->view('s_progress_v',$data);
		// 	$this->template->load('static_v','s_progress_v',$data);
		// }
			// $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
			// $this->load->view('s_progress_v',$data1);
		
        
	}

	public function input_form(){
		$student_id = $this->session->userdata('id');
		$status=0;
		$name = $this->input->post('step');

		$data= array(
			'project_id' => $student_id ,
			'progress_status' => $status,
			'progress_name'	=> $name
			);

		$this->s_progress_m->input_form($data,'mg_progress');

	}

	public function update(){
		$student_id = $this->session->userdata('id');
		$progress = $this->input->post('progress');
		
			for($x = 0; $x < count($progress); $x++){
				echo $progress[$x];
				if(!empty($progress[$x])){
					$save_data[$x]['progress_status'] = 1;
					$this->db->where('progress_id',$progress[$x])->update('mg_progress',$save_data[$x]);
				}
			}
			
		redirect(base_url('index.php/S_progress_c'));
		
	}
}
