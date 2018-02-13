<?php

class M_download_project_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login_level') !=1){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->helper(array('url','download'));
	}

	function index(){
		$name = $this->input->post('id');
		$path = "./assets/final_project/"
		$path_name = $path+$name;
		force_download($path_name,NULL);
	}

	function download($name){
		$path = "./assets/final_project/"
		$path_name = $path+$name;
		force_download($path_name,NULL);
	}


}

?>
