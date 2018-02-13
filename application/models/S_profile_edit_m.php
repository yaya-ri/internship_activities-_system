<?php
	
	class S_profile_edit_m extends CI_Model{
		
		function __construct()		{
			parent::__construct();
			if($this->session->userdata('status') !="login"){
				redirect(base_url("login_c"));
			}
		}

		function edit_form($table){
			$student_id = $this->session->userdata('id');

			$query = $this->db->query("SELECT * FROM $table WHERE student_id=$student_id ");
			return $query;
		}

		
		function update_form($student_id,$data, $table){
			$this->db->where('student_id',$student_id);
			$this->db->update($table,$data);
		}
	}
?>