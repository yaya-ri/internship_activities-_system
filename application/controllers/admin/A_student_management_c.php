<?php

class A_student_management_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=0){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('admin/a_student_management_m');
		$this->load->helper('url');
	}

	function index(){
		$table="md_student";
		$data['md_student'] = $this->a_student_management_m->read_profile($table)->result();

		if($this->input->is_ajax_request()){
			$this->load->view('admin/a_table_student_v',$data);
		}else{
			$this->template->load('admin/A_static_v','admin/a_student_management_v',$data);	
		}
		
	}

	function update_form(){
		$student_id 	= $this->input->post('sid');;
		$username 		= $this->input->post('susername');
		$namaDepan 		= $this->input->post('sfirstname');
		$namaBelakang 	= $this->input->post('slastname');
		$email 			= $this->input->post('semail');

		$data = array (
			'student_username' => $username,
			'student_first_name' => $namaDepan,
			'student_last_name' => $namaBelakang,
			'student_email' => $email
			 );

		$where = array (
			'student_id' => $student_id
			);

		$table = "md_student";

		$this->a_student_management_m->update_form($where,$data,$table);

	}

	function delete_form(){
		$id = $this->input->post('id');
		$id_a = array(
			'student_id' => $id
			);

		// print_r($id);
		$this->a_student_management_m->delete_form($id_a,'md_student');
	}

	public function add_data(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check_username=$this->a_student_management_m->check_username($username)->num_rows();

		if($check_username==0){
			$data = array(
				'student_username' => $username,
				'student_password' => $password,
				'login_level' => 2
				 );

			$name=" ";
			$data_p = array('project_title' => $name );

			$this->a_student_management_m->add_data_student('md_student',$data);
			$this->a_student_management_m->add_data_project('mg_project',$data_p);
			$id_s = $this->a_student_management_m->new_student()->row();
			$id_p = $this->a_student_management_m->new_project()->row();
			$id_st= $id_s->student_id;
			$id_pr= $id_p->project_id;
			$this->a_student_management_m->add_data_project_student($id_st,$id_pr);
		}else{
			$this->a_student_management_m->add_data_project_student($id_st,$id_pr);
		}

		
	}

	function reset_pass(){
		$student_id = $this->input->post('id');
		$password_reset = "folarium";
		$data = array (
			'student_password' => $password_reset
			 );

		$where = array (
			'student_id' => $student_id
			);

		$table = "md_student";

		$this->a_student_management_m->update_form($where,$data,$table);

	}
}

?>
