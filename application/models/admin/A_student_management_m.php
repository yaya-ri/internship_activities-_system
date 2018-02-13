<?php
	
	class A_student_management_m extends CI_Model{

		function read_profile($table){
			$query = $this->db->query("SELECT * FROM $table");
			return $query;
		}

		function update_form($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function delete_form($id,$table){
			$this->db->where($id);
			$this->db->delete($table);
		}

		function add_data_student($table,$data){
			$this->db->insert($table,$data);
		}

		function add_data_project($table,$data){
			$this->db->insert($table,$data);
		}


		function new_student(){
			$query = $this->db->query("SELECT * FROM md_student WHERE student_id=(SELECT MAX(student_id) FROM md_student)");
			return $query;
		}

		function new_project(){
			$query = $this->db->query("SELECT * FROM mg_project WHERE project_id=(SELECT MAX(project_id) FROM mg_project)");
			return $query;
		}

		function add_data_project_student($id_s,$id_p){
			// $id_student = new_student()->row();
			// $id_s = $id_project->student_id;
			// $id_project = new_project()->row();
			// $id_p = $id_project->project_id;

			$query = $this->db->query("INSERT INTO mg_project_student (student_id,project_id)VALUES ($id_s,$id_p)");

		}

		function check_username($username){
			$query = $this->db->query("SELECT * FROM md_student WHERE student_username='$username'");
			return $query;
		}

	}
?>