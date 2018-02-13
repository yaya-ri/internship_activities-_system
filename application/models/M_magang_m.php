<?php
	/**
	* 
	*/
	class M_magang_m extends CI_Model{
		
		public function read_topic(){
			$id_mentor = $this->session->userdata('id');

			$query = $this->db->query("SELECT * FROM md_student JOIN mg_project_student ON(md_student.student_id = mg_project_student.student_id) JOIN mg_project ON (mg_project_student.project_id = mg_project.project_id) JOIN mg_project_management ON (mg_project.project_id = mg_project_management.project_id) JOIN md_mentor ON (mg_project_management.mentor_id = md_mentor.mentor_id) WHERE (md_student.student_id=mg_project_student.student_id AND mg_project_student.project_id = mg_project.project_id AND mg_project.project_id = mg_project_management.project_id AND $id_mentor = mg_project_management.mentor_id)");
			return $query;
		}

		function nilai_edit($project_id){
			$query = $this->db->query("SELECT * FROM mg_project WHERE project_id=$project_id");
			return $query;
		}

		function read_notification(){
			$id_mentor = $this->session->userdata('id');
			$query = $this->db->query("SELECT * FROM md_mentor JOIN mg_mention ON (md_mentor.mentor_id = mg_mention.mentor_id) JOIN mg_activity ON (mg_mention.activity_id = mg_activity.activity_id) JOIN mg_project ON (mg_activity.project_id = mg_project.project_id) JOIN mg_project_student ON (mg_project.project_id = mg_project_student.project_id) JOIN md_student ON (mg_project_student.student_id = md_student.student_id) WHERE md_mentor.mentor_id = $id_mentor ORDER BY mg_mention.mention_id DESC" );

			return $query;
		}


	}

?>