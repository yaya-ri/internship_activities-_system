<?php
	/**
	* 
	*/
	class S_header_m extends CI_Model{
		
		function __construct(){
			parent::__construct();
			if($this->session->userdata('status')!="login"){
				redirect(base_url("login_c"));
			}
		}

		function read($student_id){
			$query = $this->db->query("SELECT * FROM md_mentor JOIN mg_mention ON (md_mentor.mentor_id = mg_mention.mentor_id) JOIN mg_activity ON (mg_mention.activity_id = mg_activity.activity_id) JOIN mg_project ON (mg_activity.project_id = mg_project.project_id) JOIN mg_project_student ON (mg_project.project_id = mg_project_student.project_id) JOIN md_student ON (mg_project_student.student_id = md_student.student_id) WHERE md_student.student_id = $student_id ORDER BY mg_mention.mention_id DESC");

			return $query;
		}
	}
?>