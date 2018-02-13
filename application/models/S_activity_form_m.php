<?php
	class S_activity_form_m extends CI_Model{
		
		function input_activity($data,$table){
			$this->db->insert($table,$data);
		}
	}
?>