<?php

class Login_c extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_m');
	}
	
	public function index(){
		$this->load->view('login_new_v');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$where_admin = array(
			'admin_username'=>$username,
			'admin_password'=>$password
			);
		$cek_admin = $this->login_m->login_data("md_admin",$where_admin)->num_rows();

		$where_student = array(
			'student_username'=>$username,
			'student_password'=>$password
			);
		$cek_student = $this->login_m->login_data("md_student",$where_student)->num_rows();

		
		$where_mentor = array(
			'mentor_username'=>$username,
			'mentor_password'=>$password
			);
		$cek_mentor = $this->login_m->login_data("md_mentor",$where_mentor)->num_rows();

		
		
		//cek apakah id sudah cocok dengan username
			// if(isset($id)){
			// 	echo $result;
			// }
		
		if($cek_student>0){
			//mendapatkan id user berdasarkan username login;
			$check_level = $this->login_m->get_login_level("login_level", "student_username",$username, "md_student")->row();
			$login_level = $check_level->login_level;

			$check_id = $this->login_m->get_id_user("student_id", "student_username",$username, "md_student")->row();
			$id_user_student = $check_id->student_id;

			$data_session = array(
				'id' => $id_user_student,
				'login_level' => $login_level,
				'status' => "login"
				);

		
			
			$this->session->set_userdata($data_session);
			//echo $this->session->userdata('login_level');

			redirect(base_url("index.php/s_static_c"));

		}else if($cek_mentor>0) {
			$check_level = $this->login_m->get_login_level("login_level", "mentor_username",$username, "md_mentor")->row();
			$login_level = $check_level->login_level;

			$check_id = $this->login_m->get_id_user("mentor_id", "mentor_username",$username, "md_mentor")->row();
			$id_user_mentor = $check_id->mentor_id;

			$data_session = array(
				'id' => $id_user_mentor,
				'login_level' => $login_level,
				'status' => "login"
				);

		
			
			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/m_profile_c"));
		}else if($cek_admin>0){
			$check_level = $this->login_m->get_login_level("login_level", "admin_username",$username, "md_admin")->row();
			$login_level = $check_level->login_level;

			$check_id = $this->login_m->get_id_user("admin_id", "admin_username",$username, "md_admin")->row();
			$id_user_admin = $check_id->admin_id;

			$data_session = array(
				'id' => $id_user_admin,
				'login_level' => $login_level,
				'status' => "login"
				);

		
			
			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/admin/a_profile_c"));
		}else{
			echo '<script language="javascript">';
			echo 'alert("message successfully sent")';
			echo '</script>';
			redirect(base_url("index.php/login_c"));
		}
	}

	// public function id_user(){
	// 	$username = $this->input->post('username');
	// 	$chek_id = $this->login_m->get_id_user("student_id", "student_username",$username, "md_student")->row();
	// 	$id_user = $check_id->student_id;
	// 	return $id_user;
	// }
}

?>
