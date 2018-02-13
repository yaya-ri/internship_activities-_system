<?php

	class S_activity_edit_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			if($this->session->userdata('login_level') !=2){
			redirect(base_url("index.php/login_c"));
		}
			$this->load->model('s_activity_edit_m');
			$this->load->helper('url');
		}

		public function edit_form($activity_id){
			
			$data['mg_activity'] = $this->s_activity_edit_m->edit_form($activity_id)->result();
			$this->template->load('static_v','s_activity_todo_edit_v',$data);
		}

		function update(){

			$activity_id 	= $this->input->post('id');
			$status 		= $this->input->post('status');				
			$aktivitas 		= $this->input->post('aktivitas');
			$pengerjaan 	= $this->input->post('pengerjaan');
			$deskripsi 		= $this->input->post('deskripsi');
			$kendala 		= $this->input->post('kendala');

			$data= array(
				'activity_name' => $aktivitas,
				'activity_status' => $status,
				'activity_date' => $pengerjaan,
				'activity_description' => $deskripsi,
				'activity_problem' => $kendala
				);

				$where = array(
						'activity_id' => $activity_id
						);

			$this->s_activity_edit_m->update_form($where, $data,'mg_activity');
			

		}

		function delete(){
			$id = $this->input->post('id');
			$id_a = array(
				'activity_id' => $id
				);
			$this->s_activity_edit_m->delete_mention($id_a,'mg_mention');
			$this->s_activity_edit_m->delete_form($id_a,'mg_activity');
			//redirect(base_url("index.php/s_activity_c"));
		}
	}
?>