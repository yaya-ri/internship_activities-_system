<?php
	/**
	* 
	*/
	class M_profile_edit_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			if($this->session->userdata('status' !="login")){
				redirect(base_url("index.php/login_c"));
				
			}
			$this->load->model('m_profile_edit_m');
			$this->load->model('s_header_m');
			$this->load->helper('url');
		}

		public function index(){
			$table="md_mentor";
			$student_id = $this->session->userdata('id');
        	$data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
			$data2['notifikasi'] = $this->m_profile_edit_m->read_notification()->result();
			$data3['md_mentor'] = $this->m_profile_edit_m->edit_form($table)->result();
			$data = $data1+$data2+$data3;
			if($this->input->is_ajax_request()){
				$this->load->view('m_profile_edit_v',$data);
			}else{
				$this->template->load('m_static_v','m_profile_edit_v',$data);
			}
		}

		function update_profile(){
			$mentor_id = $this->session->userdata('id');

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
						'mentor_profile' => $fileinfo['file_name']
					);
				$this->m_profile_edit_m->update_form($mentor_id,$input,'md_mentor');
			}
			redirect(base_url('index.php/m_profile_c/'));
		}

		function update_form(){

			$mentor_id = $this->session->userdata('id');
			$table = "md_mentor";

			$config['upload_path']          = './assets/gambar/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;

			$this->load->library('upload');
			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				//$this->load->view('v_upload', $error);
			} else {
				$data = array('upload_data' => $this->upload->data());

				$fileinfo = $this->upload->data();
				$input = array (
						'mentor_profile' => $fileinfo['file_name']
					);
				$this->m_profile_edit_m->update_form($mentor_id,$input,$table);
			}

				

			$nama_depan 	= $this->input->post('nama_depan');
			$nama_belakang 	= $this->input->post('nama_belakang');
			$tanggal_lahir 	= $this->input->post('tanggal_lahir');
			$alamat 		= $this->input->post('alamat');
			$email			= $this->input->post('email');
			$nomer 			= $this->input->post('nomer');

			$data = array(
				'mentor_first_name'		=> $nama_depan,
				'mentor_last_name'		=> $nama_belakang,
				'mentor_born_date'		=> $tanggal_lahir,
				'mentor_place'			=> $alamat,
				'mentor_email'			=> $email,
				'mentor_phone_number'	=> $nomer
				);

			$this->m_profile_edit_m->update_form($mentor_id,$data,$table);
			redirect(base_url("index.php/m_profile_c"));
		}

	}
?>