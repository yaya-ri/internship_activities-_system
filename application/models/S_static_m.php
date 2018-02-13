<?php
	class S_static_m extends CI_Model{

		function __construct(){
			parent::__construct();
			if($this->session->userdata('status') !="login"){
				redirect(base_url("login"));
			}
		}
		
		public function read($student_id){
			$query = $this->db->query("SELECT * FROM md_student WHERE (student_id=$student_id)");
			return $query;
		}

		
	}
?>