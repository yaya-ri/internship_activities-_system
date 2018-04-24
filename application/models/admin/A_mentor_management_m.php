<?php
	
	class A_mentor_management_m extends CI_Model{

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

		function add_data_mentor($table,$data){
			$this->db->insert($table,$data);
		}

		function check_all_username($username){
			$query = $this->db->query("SELECT * FROM md_mentor WHERE mentor_username='$username'");
			return $query;
		}

		function check_single_username($id){
			$query = $this->db->query("SELECT * FROM md_mentor WHERE mentor_id=$id");
			return $query;
		}

	}
?>