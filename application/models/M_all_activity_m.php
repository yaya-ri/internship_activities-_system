<?php 
	class M_all_activity_m extends CI_Model{

		public function read_activity(){
			$mentor_id= $this->session->userdata('id');
			// $query = $this->db->query("SELECT * FROM md_student JOIN mg_project_student ON (md_student.stuedent_id = mg_project_student.student_id) JOIN mg_project ON(mg_project_student.project_id = mg_project.project_id) JOIN mg_activity ON (mg_project.project_id = mg_activity.project_id JOIN mg_project_management ON (mg_project.project_id = mg_project_management.project_id) JOIN md_mentor ON (mg_project_management.mentor_id =  md_mentor.mentor_id) WHERE md_mentor.mentor_id = $mentor_id");
			
			$query = $this->db->query("SELECT DISTINCT * FROM mg_activity JOIN mg_project ON (mg_activity.project_id = mg_project.project_id) JOIN mg_project_management ON (mg_project.project_id = mg_project_management.project_id) JOIN md_mentor ON (mg_project_management.mentor_id = md_mentor.mentor_id) WHERE md_mentor.mentor_id = $mentor_id");

			return $query;
		}

		public function read_student($activity_id){
			$query = $this->db->query("SELECT * FROM md_student JOIN mg_project_student ON(md_student.student_id = mg_project_student.student_id) JOIN mg_project ON(mg_project_student.project_id) mg_activity ON(mg_project.project_id = mg_activity.project_id) WHERE mg_activity.activity_id = $activity_id ");
			return $query;
		}
	
	}
?>