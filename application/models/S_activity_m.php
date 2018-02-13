<?php
	/**
	* 
	*/
	class S_activity_m extends CI_Model{

		function __construct(){
			parent::__construct();
			if($this->session->userdata('status') !="login"){
				redirect(base_url("login"));
			}
		}
		
		public function read_activity(){
			$id_student = $this->session->userdata('id');
			$query = $this->db->query("SELECT * FROM mg_activity JOIN mg_project ON( mg_activity.project_id = mg_project.project_id) JOIN mg_project_student ON (mg_project.project_id=mg_project_student.project_id) JOIN md_student ON (mg_project_student.student_id=md_student.student_id) WHERE ($id_student=mg_project_student.student_id) ORDER BY mg_activity.activity_date DESC");
			return $query;
		}

		
	}
?>