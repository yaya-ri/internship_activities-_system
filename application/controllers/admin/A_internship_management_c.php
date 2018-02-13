<?php

class A_internship_management_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=0){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('admin/a_internship_management_m');
		$this->load->helper('url');
	}

	var $id_p=0;

	function index(){
		// // $id=$this->id_p;
		// if($this->input->is_ajax_request()){
		// 	if($this->input->post()){
		// 		// $id = 1;
		// 		$data1['projectM'] = $this->a_internship_management_m->read_all_mentor_table()->result();
		// 		$data2['student'] = $this->a_internship_management_m->read_student()->result();
		// 		$data3['mentor'] = $this->a_internship_management_m->read_mentor()->result();
		// 		$data = $data1 + $data2 + $data3;
		// 		$this->load->view('admin/a_internship_management_table_v',$data);
		// 	}else{
		// 		// $id = $this->input->post('id');
		// 		$data1['projectM'] = $this->a_internship_management_m->read_all_mentor_table()->result();
		// 		$data2['student'] = $this->a_internship_management_m->read_student()->result();
		// 		$data3['mentor'] = $this->a_internship_management_m->read_mentor()->result();
		// 		$data = $data1 + $data2 + $data3;
		// 		$this->load->view('admin/a_internship_management_table_v',$data);
		// 	}
			
		// }else{
		// 	$data1['projectM'] = null;
		// 	$data2['student'] = $this->a_internship_management_m->read_student()->result();
		// 	$data3['mentor'] = $this->a_internship_management_m->read_mentor()->result();
		// 	$data = $data1 + $data2 + $data3;
		// 	$this->template->load('admin/A_static_v','admin/a_internship_management_v',$data);
		// }
		$data2['student'] = $this->a_internship_management_m->read_student()->result();
		$data3['mentor'] = $this->a_internship_management_m->read_mentor()->result();
		$data1['table'] = $this->a_internship_management_m->read_table()->result();
		$data = $data1 + $data2 + $data3;
		$this->template->load('admin/A_static_v','admin/a_internship_management_v',$data);
		
	}

	function set_id(){
		$id = $this->input->post('id');
		$this->id_p = $id;
	}

	function read_mentor(){
		$f_name = $this->input->post('nama');
		$a = $this->a_internship_management_m->get_project_id($f_name)->row();
		$this->id_p = $a->student_id;
		$id = $a->student_id;
		// print_r($id);
		$data1['projectM'] = $this->a_internship_management_m->read_mentor_table($id)->result();
		$data2['student'] = $this->a_internship_management_m->read_student()->result();
		$data = $data1 + $data2;
		$this->load->view('admin/a_internship_management_table_v',$data);
	}
	

	function add_relation(){
		$id_student = $this->input->post('student');
		$id_mentor1 = $this->input->post('mentor1');
		$id_mentor2 = $this->input->post('mentor2');

		$project = $this->a_internship_management_m->get_project_input($id_student)->row();
		$project_id = $project->project_id;

		$data1 = array(
			'project_id' => $project_id,
			'mentor_id' => $id_mentor1
			 );
		$data2 =array(
			'project_id' => $project_id,
			'mentor_id' => $id_mentor2
			 );
		$this->a_internship_management_m->make_relation('mg_project_management',$data1);
		$this->a_internship_management_m->make_relation('mg_project_management',$data2);
	}

	// function table(){
	// 	$id = 1;
	// 	// print_r($id);
	// 	$data1['projectM'] = $this->a_internship_management_m->read_mentor_table($id)->result();
	// 	$data2['student'] = $this->a_internship_management_m->read_student()->result();
	// 	$data = $data1 + $data2;
	// 	$this->load->view('admin/a_internship_management_table_v',$data);
	// }

	// function add_data(){
	// 	$s_f_name = 
	// }


}

?>
