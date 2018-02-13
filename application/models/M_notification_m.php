<?php
	/**
	* 
	*/
	class M_notification_m extends CI_Model{

		function read_notification(){
			$id_mentor = $this->session->userdata('id');
			$query = $this->db->query("SELECT * FROM md_mentor JOIN mg_mention ON (md_mentor.mentor_id = mg_mention.mentor_id) JOIN mg_activity ON (mg_mention.activity_id = mg_activity.activity_id) JOIN mg_project ON (mg_activity.project_id = mg_project.project_id) JOIN mg_project_student ON (mg_project.project_id = mg_project_student.project_id) JOIN md_student ON (mg_project_student.student_id = md_student.student_id) WHERE md_mentor.mentor_id = $id_mentor ORDER BY mg_mention.mention_id DESC" );

			return $query;
		}


	}

?>