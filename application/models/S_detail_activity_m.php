<?php
	/**
	* 
	*/
	class S_detail_activity_m extends CI_Model{

		function __construct(){
			parent::__construct();
			if($this->session->userdata('status') !="login"){
				redirect(base_url("login"));
			}
		}
		
		public function read_activity_desc($activity_id){

			// $query = $this->db->query("SELECT * FROM mg_activity JOIN mg_project ON( mg_activity.project_id = mg_project.project_id) JOIN mg_project_student ON (mg_project.project_id=mg_project_student.project_id) JOIN md_student ON (mg_project_student.student_id=md_student.student_id) WHERE (md_student.student_id=mg_project_student.student_id AND mg_activity.project_id=mg_project.project_id)");
			//$query = $this->db->query("SELECT * FROM mg_activity WHERE (activity_id=$activity_id)");

			$query = $this->db->query("SELECT distinct * FROM mg_activity JOIN mg_project ON (mg_activity.project_id = mg_project.project_id) JOIN mg_project_management ON (mg_project.project_id = mg_project_management.project_id) JOIN md_mentor ON (mg_project_management.mentor_id = md_mentor.mentor_id) WHERE (mg_activity.activity_id=$activity_id)");

			return $query;
		}

		public function path($student_id){
			$query = $this->db->query("SELECT * FROM md_student WHERE (student_id = $student_id)");

			return $query;
		}

		public function get_mentor_id($name){
			$query = $this->db->query("SELECT mentor_id FROM md_mentor WHERE mentor_first_name='$name'");
			return $query;
		}

		public function read_mention($activity_id){
			$query = $this->db->query("SELECT * FROM mg_mention JOIN md_mentor ON(mg_mention.mentor_id=md_mentor.mentor_id) WHERE activity_id=$activity_id ORDER BY mg_mention.mention_id DESC");
			return $query;
		}

		
		public function mention_mentor($data,$table){
			$this->db->insert($table,$data);
		}

		public function mention_check($activity_id){
			$query = $this->db->query("SELECT * FROM mg_mention WHERE activity_id=$activity_id");
			return $query;
		}
	}
?>