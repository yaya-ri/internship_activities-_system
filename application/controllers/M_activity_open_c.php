<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_activity_open_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=1){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('m_activity_open_m');
		$this->load->helper('url');
	}

	public function read($student_id){
		
		if($this->input->is_ajax_request()){
			$sort = $this->input->post('sort');
			$nama ="nama";
			$tanggal = "tanggal";
			$verifikasi = "verifikasi";
			$status = "status";
			if($sort== $nama ){
				$data1['notifikasi'] = $this->m_activity_open_m->read_notification()->result();
				$data2['mg_activity'] = $this->m_activity_open_m->read_sort_name($student_id)->result();
				$data = $data1+$data2;
				$this->load->view('m_activity_open_v',$data);
			}else if($tanggal == $sort){
				$data1['notifikasi'] = $this->m_activity_open_m->read_notification()->result();
				$data2['mg_activity'] = $this->m_activity_open_m->read_sort_date($student_id)->result();
				$data = $data1+$data2;
				$this->load->view('m_activity_open_v',$data);
			}else if($verifikasi==$sort){
				$data1['notifikasi'] = $this->m_activity_open_m->read_notification()->result();
				$data2['mg_activity'] = $this->m_activity_open_m->read_sort_verification($student_id)->result();
				$data = $data1+$data2;
				$this->load->view('m_activity_open_v',$data);
			}else if($status==$sort){
				$data1['notifikasi'] = $this->m_activity_open_m->read_notification()->result();
				$data2['mg_activity'] = $this->m_activity_open_m->read_sort_status($student_id)->result();
				$data = $data1+$data2;
				$this->load->view('m_activity_open_v',$data);
			}
			
			
		}else{

			$data1['notifikasi'] = $this->m_activity_open_m->read_notification()->result();
			$data2['mg_activity'] = $this->m_activity_open_m->read($student_id)->result();
			$data = $data1+$data2;
			$this->template->load('m_static_v','m_activity_open_v',$data);
		}
		
	}
}
