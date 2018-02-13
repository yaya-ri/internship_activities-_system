<?php
	class S_progress_m extends CI_Model{
		
		function read(){
			$student_id = $this->session->userdata('id');
			$query = $this->db->query("SELECT * FROM mg_progress WHERE project_id=$student_id");
			return $query;
		}

		function input_form($data,$table){
			$this->db->insert($table,$data);
		}

		function update($data,$progress_id){
			$this->db->update_batch('mg_progress', $data ,$progress_id);
		}

		
	}
?>