<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class S_activity_mention_c extends CI_Controller {

		function __construct(){
			parent::__construct();
			if($this->session->userdata('status') !="login"){
					redirect(base_url("login"));
			}
			$this->load->model('s_activity_mention_m');
			$this->load->helper('url');
		}

		function index(){
			$data['mg_mention'] = $this->s_activity_mention_m->read_mention()->result();
			$this->template->load('static_v','s_activity_mention_v',$data);
	
		}
	}
 ?>