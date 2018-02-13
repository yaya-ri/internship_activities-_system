<?php
	class S_topic_form_m extends CI_Model{
		
		function update_topic($student_id,$data, $table){
			$this->db->where('project_id',$student_id);
			$this->db->update($table,$data);
		}

		function read_topic(){
			$id_student = $this->session->userdata('id');
			$query = $this->db->query("SELECT * FROM md_student JOIN mg_project_student ON (md_student.student_id=mg_project_student.student_id) 
				JOIN mg_project ON (mg_project_student.project_id = mg_project.project_id) 
				JOIN mg_project_management ON (mg_project.project_id = mg_project_management.project_id) 
				JOIN md_mentor ON (mg_project_management.mentor_id=md_mentor.mentor_id) 
				WHERE ($id_student= mg_project_student.student_id AND mg_project_student.project_id = mg_project.project_id 
				AND mg_project.project_id = mg_project_management.project_id AND mg_project_management.mentor_id=md_mentor.mentor_id )");

			return $query;


		}
	}
?>