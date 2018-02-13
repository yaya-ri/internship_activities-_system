<?php
	/**
	* 
	*/
	class M_profile_edit_m extends CI_Model{
		
		function __construct(){
			parent::__construct();
			if($this->session->userdata('status')!="login"){
				redirect(base_url("login_c"));
			}
		}

		function edit_form($table){
			$mentor_id = $this->session->userdata('id');

			$query = $this->db->query("SELECT * FROM $table WHERE mentor_id=$mentor_id");
			return $query;
		}

		function update_form($mentor_id,$data,$table){
			$this->db->where('mentor_id',$mentor_id);
			$this->db->update($table,$data);
		}

		function read_notification(){
			$id_mentor = $this->session->userdata('id');
			$query = $this->db->query("SELECT * FROM md_mentor JOIN mg_mention ON (md_mentor.mentor_id = mg_mention.mentor_id) JOIN mg_activity ON (mg_mention.activity_id = mg_activity.activity_id) JOIN mg_project ON (mg_activity.project_id = mg_project.project_id) JOIN mg_project_student ON (mg_project.project_id = mg_project_student.project_id) JOIN md_student ON (mg_project_student.student_id = md_student.student_id) WHERE md_mentor.mentor_id = $id_mentor ORDER BY mg_mention.mention_id DESC");

			return $query;
		}
	}
?>