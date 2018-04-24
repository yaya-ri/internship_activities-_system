<?php 
	/**
	* 
	*/
	class m_detail_activity_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('m_detail_activity_m');
			$this->load->helper('url');
		}

		function read($activity_id){
			$data3['notifikasi'] = $this->m_detail_activity_m->read_notification()->result();
			$data1['mg_activity']=$this->m_detail_activity_m->read($activity_id)->result();
			$data2['mg_student']= $this->m_detail_activity_m->read_mention($activity_id)->result();
			$data=$data1+$data2+$data3;
			if($this->input->is_ajax_request()){
				$this->load->view('m_detail_activity_v',$data);
			}else{
				$this->template->load('m_static_v','m_detail_activity_v',$data);
			}
			
		}

		function read_notification($activity_id){
			$data3['notifikasi'] = $this->m_detail_activity_m->read_notification()->result();
			$data1['mg_activity']=$this->m_detail_activity_m->read($activity_id)->result();
			$data2['mg_student']= $this->m_detail_activity_m->read_mention($activity_id)->result();
			$data=$data1+$data2+$data3;

			$this->m_detail_activity_m->change_mention_read($activity_id);

			if($this->input->is_ajax_request()){
				$this->load->view('m_detail_activity_v',$data);
			}else{
				$this->template->load('m_static_v','m_detail_activity_v',$data);
			}
			
		}

		public function mentor_mention(){
			$id_user 		= $this->session->userdata('id');
			$status			= 2;
			$activity_id	= $this->input->post('id');
			$komentar		= $this->input->post('komentar');
			//echo $mentor_id;

			$data = array(
				'mention_status' => $status,
				'mention_chat'	 => $komentar,
				'activity_id'	 => $activity_id,
				'mentor_id'		 => $id_user,
				'mention_date'	 => date('Y-m-d H:i:s')
				);

			$this->m_detail_activity_m->mention_mentor($data,'mg_mention');
			redirect(base_url("index.php/m_detail_activity_c/read/$activity_id"));
		}

		public function update_status(){
			$activity_id = $this->input->post('id');
			//$id_user 	 = $this->session->userdata('id');
			$status 	 = 1;

			$data = array(
				'activity_verification' => $status 
				);
			$this->m_detail_activity_m->update_status($activity_id,$data,'mg_activity');

		}
	}
 ?>