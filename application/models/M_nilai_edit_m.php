<?php
	/**
	* 
	*/
	class M_nilai_edit_m extends CI_Model{
		
		function nilai_edit($project_id){
			$query = $this->db->query("SELECT * FROM mg_project WHERE project_id=$project_id");
			return $query;
		}

		function update_nilai($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		
	}
?>