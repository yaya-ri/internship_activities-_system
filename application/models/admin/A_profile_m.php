<?php
	
	class A_profile_m extends CI_Model{

		function read_profile($table){
			$id_user = $this->session->userdata('id');
			$query = $this->db->query("SELECT * FROM $table WHERE (admin_id=$id_user)");
			return $query;
		}

		function update_form($admin_id,$data,$table){
			$this->db->where('admin_id',$admin_id);
			$this->db->update($table,$data);
		}
	}
?>