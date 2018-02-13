<?php
	class S_activity_mention_m extends CI_Model{
		
		public function read_mention(){
			$query = $this->db->query("SELECT * FROM mg_mention");
			return $query;
		}
	}
?>