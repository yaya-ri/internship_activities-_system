<?php
	/**
	* 
	*/
	class S_activity_edit_m extends CI_Model{
		
		function __construct(){
			parent::__construct();
			if($this->session->userdata('status') !="login"){
				redirect(base_url("login_c"));
			}
		}

		function edit_form($activity_id){
			$query = $this->db->query("SELECT * FROM mg_activity WHERE (activity_id=$activity_id)");
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

		function delete_mention($id,$table){
			$this->db->where($id);
			$this->db->delete($table);
		}
	}
?>