<?php

class A_profile_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=0){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('admin/a_profile_m');
		$this->load->helper('url');
	}

	function index(){
		$table="md_admin";
		$data['admin'] = $this->a_profile_m->read_profile($table)->result();
		$this->template->load('admin/A_static_v','admin/A_profile_v',$data);
	}

	function update_profile(){
			$admin_id = $this->session->userdata('id');

			$config['upload_path']          = './assets/gambar/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('v_upload', $error);
			}else{
				$data = array('upload_data' => $this->upload->data());

				$fileinfo = $this->upload->data();
				$input = array (
						'admin_profile' => $fileinfo['file_name']
					);
				$this->a_profile_m->update_form($admin_id,$input,'md_admin');
			}
			redirect(base_url('index.php/admin/a_profile_c/'));
		
	}
}

?>
