<?php


class S_activity_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=2){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('s_activity_m');
		$this->load->model('s_header_m');
		$this->load->helper('url');
	}

	// public function index(){
	// 	$data['mg_activity'] = $this->s_activity_m->read_activity()->result();
	// 	if ($this->input->is_ajax_request()) {
	// 		$this->load->view('s_activity_table', $data);
	// 	} else {
	// 		$this->template->load('static_v','s_activity1_v',$data);
	// 	}
	// }

	public function todo(){
		$student_id = $this->session->userdata('id');
        $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
		$data2['mg_activity'] = $this->s_activity_m->read_activity()->result();
		$data = $data1 + $data2;

		if ($this->input->is_ajax_request()) {
			$this->load->view('s_activity_todo_table_v', $data);
		} else {
			$this->template->load('static_v','s_activity_todo_v',$data);
		}
	}

	public function doing(){
		$student_id = $this->session->userdata('id');
        $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
		$data2['mg_activity'] = $this->s_activity_m->read_activity()->result();
		$data = $data1 + $data2;
		if ($this->input->is_ajax_request()) {
			$this->load->view('s_activity_doing_table_v', $data);
		} else {
			$this->template->load('static_v','s_activity_doing_v',$data);
		}
	}

	public function review(){
		$student_id = $this->session->userdata('id');
        $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
		$data2['mg_activity'] = $this->s_activity_m->read_activity()->result();
		$data = $data1 + $data2;
		if ($this->input->is_ajax_request()) {
			$this->load->view('s_activity_review_table_v', $data);
		} else {
			$this->template->load('static_v','s_activity_review_v',$data);
		}
	}


	public function done(){
		$student_id = $this->session->userdata('id');
        $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
		$data2['mg_activity'] = $this->s_activity_m->read_activity()->result();
		$data = $data1 + $data2;
		if ($this->input->is_ajax_request()) {
			$this->load->view('s_activity_done_table_v', $data);
		} else {
			$this->template->load('static_v','s_activity_done_v',$data);
		}
	}

}
?>
