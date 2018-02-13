<?php
	
	class S_profile_m extends CI_Model{

		function read_profile($table){
			$id_user = $this->session->userdata('id');

			// $this->db->where($id_user);
			// $this->db->get($table);
			$query = $this->db->query("SELECT * FROM $table WHERE (student_id=$id_user)");
			return $query;
		}
	}
?>