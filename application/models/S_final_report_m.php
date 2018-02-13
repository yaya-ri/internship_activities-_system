<?php 
	/**
	* 
	*/
	class S_final_report_m extends CI_Model{
		function __construct()		{
			parent::__construct();
			if($this->session->userdata('status') !="login"){
				redirect(base_url("login_c"));
			}
		}

		function update_final_report($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function select_project($student_id){
			$query = $this->db->query("SELECT * FROM mg_project JOIN mg_project_student ON (mg_project.project_id = mg_project_student.project_id) JOIN md_student ON (mg_project_student.student_id = md_student.student_id) WHERE md_student.student_id=$student_id");
			return $query;
		}


	}
 ?>