<?php
	/**
	* 
	*/
	class M_header_m extends CI_Model{
		
		function __construct(){
			parent::__construct();
			if($this->session->userdata('status')!="login"){
				redirect(base_url("login_c"));
			}
		}

		function read($mentor_id){
			$query = $this->db->query("SELECT md_student JOIN mg_project_student ON(md_student.student_id = mg_project_student.student_id) JOIN mg_project ON (mg_project_student.project_id = mg_project.project_id) JOIN mg_activity ON (mg_project.project_id = mg_activity.project_id) JOIN mg_mention ON (mg_activity.activity_id = mg_mention.activity_id) JOIN md_mentor ON (mg_mention.mentor_id = md_mentor.mentor_id) WHERE md_mentor.mentor_id = $mentor_id");

			return $query;
		}
	}
?>