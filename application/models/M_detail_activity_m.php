<?php
	/**
	* 
	*/
	class M_detail_activity_m extends CI_Model{
		
		function __construct(){
			parent::__construct();
			if($this->session->userdata('status') !="login"){
				redirect(base_url("login"));
			}
		}

		function read($activity_id){
			$query = $this->db->query("SELECT * FROM mg_activity JOIN mg_project WHERE activity_id=$activity_id");
			return $query;
		}

		public function read_mention($activity_id){
			$query = $this->db->query("SELECT * FROM md_student JOIN mg_project_student ON(md_student.student_id = mg_project_student.student_id) JOIN mg_project ON(mg_project_student.project_id = mg_project.project_id) JOIN mg_activity ON(mg_project.project_id = mg_activity.project_id) JOIN mg_mention ON(mg_activity.activity_id = mg_mention.activity_id) WHERE mg_mention.activity_id=$activity_id ORDER BY mg_mention.mention_id DESC");
			return $query;
			
		}

		public function mention_mentor($data,$table){
			$this->db->insert($table,$data);
		}

		function read_notification(){
			$id_mentor = $this->session->userdata('id');
			$query = $this->db->query("SELECT * FROM md_mentor JOIN mg_mention ON (md_mentor.mentor_id = mg_mention.mentor_id) JOIN mg_activity ON (mg_mention.activity_id = mg_activity.activity_id) JOIN mg_project ON (mg_activity.project_id = mg_project.project_id) JOIN mg_project_student ON (mg_project.project_id = mg_project_student.project_id) JOIN md_student ON (mg_project_student.student_id = md_student.student_id) WHERE md_mentor.mentor_id = $id_mentor ORDER BY mg_mention.mention_id DESC");

			return $query;
		}

		public function update_status($activity_id,$data,$table){
			$this->db->where('activity_id',$activity_id);
			$this->db->update($table,$data);
		}

		
	}
 ?>