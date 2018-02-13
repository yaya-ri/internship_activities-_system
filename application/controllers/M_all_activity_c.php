<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_all_activity_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=1){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('m_all_activity_m');
		$this->load->model('m_notification_m');
		$this->load->helper('url');
	}

	public function index(){
		$data1['activity'] = $this->m_all_activity_m->read_activity()->result();
		$data2['notifikasi'] = $this->m_notification_m->read_notification()->result();
		// $activity = $this->m_all_activity_m->read_activity()->result();
		// //$student['student'];
		// foreach ($activity as $a) {
		// 	$id = $a->activity_id;
		// 	$student['student'] = $this->m_all_activity_m->read_student($id)->result();
		// 	$student['student'] = $student['student'] + $s;
		// }

		$data = $data1 + $data2;
		$this->template->load('m_static_v','m_all_activity_v',$data);
	}
}
