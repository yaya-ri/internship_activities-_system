<?php
	
	class A_internship_management_m extends CI_Model{

		public function read_student(){
			$query = $this->db->query("SELECT * FROM md_student JOIN mg_project_student ON (md_student.student_id = mg_project_student.student_id) JOIN mg_project ON (mg_project_student.project_id = mg_project.project_id) LEFT JOIN mg_project_management ON (mg_project.project_id = mg_project_management.project_id) WHERE mg_project_management.project_id IS NULL");
			return $query;
		}

		public function read_mentor_table($project_id){
			$query = $this->db->query("SELECT * FROM md_mentor JOIN mg_project_management oN (md_mentor.mentor_id = mg_project_management.mentor_id) JOIN mg_project ON (mg_project_management.project_id = mg_project.project_id) WHERE mg_project_management.project_id=$project_id ");
			return $query;
		}

		public function read_all_mentor_table(){
			$query = $this->db->query("SELECT * FROM md_mentor JOIN mg_project_management oN (md_mentor.mentor_id = mg_project_management.mentor_id) JOIN mg_project ON (mg_project_management.project_id = mg_project.project_id)");
			return $query;
		}

		public function get_project_id($f_name){
			$query=$this->db->query("SELECT * FROM md_student WHERE student_first_name = '$f_name'");
			return $query;
		}

		function read_mentor(){
			$query = $this->db->query("SELECT * FROM md_mentor");
			return $query;
		}

		function read_table(){
			$query=$this->db->query("SELECT * FROM md_student JOIN mg_project_student ON (md_student.student_id = mg_project_student.student_id) JOIN mg_project ON(mg_project_student.project_id = mg_project.project_id) JOIN mg_project_management ON (mg_project.project_id = mg_project_management.project_id) JOIN md_mentor ON (mg_project_management.mentor_id = md_mentor.mentor_id) ORDER BY md_student.student_username");
			return $query;
		}

		function add_data($table,$data){
			$this->db->insert($table,$data);
		}

		function get_project_input($id){
			$query = $this->db->query("SELECT * FROM mg_project JOIN mg_project_student ON (mg_project.project_id = mg_project_student.project_id) JOIN md_student ON (mg_project_student.student_id = md_student.student_id) WHERE md_student.student_id=$id");
			return $query;
		}

		function make_relation($table,$data){
			$this->db->insert($table,$data);
			//$this->db->query("INSERT INTO mg_project_management (mentor)");
		}


	}
?>