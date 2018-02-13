<?php
	class Login_m extends CI_Model{
			
		public function login_data($table,$where){
			return $this->db->get_where($table,$where);
		}

		public function get_id_user($id,$column,$username,$table){
			$this->db->select($id);
			$this->db->where($column,$username);
			$query = $this->db->get($table);
			return $query;
		}

		public function get_login_level($id,$column,$username,$table){
			$this->db->select($id);
			$this->db->where($column,$username);
			$query = $this->db->get($table);
			return $query;
		}
	}
?>