<?php

class A_mentor_management_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=0){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('admin/a_mentor_management_m');
		$this->load->helper('url');
	}

	function index(){
		$table="md_mentor";
		$data['md_mentor'] = $this->a_mentor_management_m->read_profile($table)->result();

		if($this->input->is_ajax_request()){
			$this->load->view('admin/a_table_mentor_v',$data);
		}else{
			$this->template->load('admin/A_static_v','admin/a_mentor_management_v',$data);	
		}
		
	}

	function update_form(){
		$mentor_id = $this->input->post('mid');
		$username = $this->input->post('musername');
		$namaDepan = $this->input->post('mfirstname');
		$namaBelakang = $this->input->post('mlastname');
		$email = $this->input->post('memail');

		$check_username = $this->a_mentor_management_m->check_single_username($mentor_id)->row();
		$check_all_username=$this->a_mentor_management_m->check_all_username($username)->num_rows();

		if($check_username->mentor_username==$username){
			$data = array(
				'mentor_username' => $username,
				'mentor_first_name' => $namaDepan,
				'mentor_last_name' => $namaBelakang,
				'mentor_email' => $email
				 );
			$where = array (
				'mentor_id' => $mentor_id
				);

			$table='md_mentor';

			$this->a_mentor_management_m->update_form($where,$data,$table);
		}else if($check_all_username==0){
			$data = array(
				'mentor_username' => $username,
				'mentor_first_name' => $namaDepan,
				'mentor_last_name' => $namaBelakang,
				'mentor_email' => $email
				 );
			$where = array (
				'mentor_id' => $mentor_id
				);

			$table='md_mentor';

			$this->a_mentor_management_m->update_form($where,$data,$table);
			
		}else{
			$this->a_mentor_management_m->update_form($where,$data,$table);
		}
		

	}

	function delete_form(){
		$id = $this->input->post('id');
		$id_a = array(
			'mentor_id' => $id
			);

		// print_r($id);
		$this->a_mentor_management_m->delete_form($id_a,'md_mentor');
	}

	public function add_data(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check_all_username=$this->a_mentor_management_m->check_all_username($username)->num_rows();
		if($check_all_username==0){
			$data = array(
				'mentor_username' => $username,
				'mentor_password' => $password,
				'login_level' => 1
				 );

			// $name=" ";
			// $data_p = array('project_title' => $name );

			$this->a_mentor_management_m->add_data_mentor('md_mentor',$data);
			// $this->a_student_management_m->add_data_project('mg_project',$data_p);
		}else{
			$this->a_mentor_management_m->add_data_mentor('md_mentor',$data);
		}
		
	}

	function reset_pass(){
		$mentor_id = $this->input->post('id');
		$password_reset = "folarium";
		$data = array (
			'mentor_password' => $password_reset
			 );

		$where = array (
			'mentor_id' => $mentor_id
			);

		$table = "md_mentor";

		$this->a_mentor_management_m->update_form($where,$data,$table);

	}
}

?>
