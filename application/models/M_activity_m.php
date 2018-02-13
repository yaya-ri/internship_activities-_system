<?php
	/**
	* 
	*/
	class M_activity_m extends CI_Model{
		
		public function read_student(){
			$id_mentor = $this->session->userdata('id');
			// $check_id_project = $this->db->query("SELECT * FROM mg_project JOIN mg_project_management ON (mg_project.project_id=mg_project_management.project_id) JOIN md_mentor ON (mg_project_management.project_id = md_mentor.mentor_id) where (md_mentor.mentor_id = $id_mentor)") ->row();
			// $id_project = $check_id_project->project_id;
			// $query = $this->db->query("SELECT * FROM md_student JOIN mg_project_student ON (md_student.student_id = mg_project_student.student_id) JOIN mg_project ON (mg_project_student.project_id = mg_project.project_id) WHERE (mg_project.project_id=$id_project)");
			$query = $this->db->query("SELECT * FROM md_student JOIN mg_project_student ON (md_student.student_id = mg_project_student.student_id) JOIN mg_project ON (mg_project_student.project_id = mg_project.project_id) JOIN mg_project_management ON(mg_project.project_id = mg_project_management.project_id) JOIN md_mentor ON (mg_project_management.mentor_id = md_mentor.mentor_id) WHERE (md_mentor.mentor_id=$id_mentor) ORDER BY mg_mention.mention_id DESC");
			return $query;

		}
		
	}

?>