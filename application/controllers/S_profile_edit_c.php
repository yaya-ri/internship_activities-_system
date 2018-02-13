<?php

class S_profile_edit_c extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') !="login"){
			redirect(base_url("index.php/login_c"));
		}
		$this->load->model('s_profile_edit_m');
		$this->load->helper(array('form','url'));
	}

	

	public function index(){
			$table="md_student";
			$data['md_student'] = $this->s_profile_edit_m->edit_form($table)->result();
			if($this->input->is_ajax_request()){
				$this->load->view('s_profile_edit_v',$data,array('error' => ' ' ));
			}else{
				$this->template->load('static_v','s_profile_edit_v',$data,array('error' => ' ' ));
			}
	}

	function update_form(){

			$student_id = $this->session->userdata('id');


			$nama_depan = $this->input->post('nama_depan');
			$nama_belakang = $this->input->post('nama_belakang');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$alamat = $this->input->post('alamat');
			$perguruan_tinggi = $this->input->post('perguruan_tinggi');
			$jurusan = $this->input->post('jurusan');
			$email = $this->input->post('email');
			$sosial_media = $this->input->post('sosial_media');
			$nomer = $this->input->post('nomer');
			

			$data = array(
				'student_first_name'	=> $nama_depan,
				'student_last_name'		=> $nama_belakang,
				'student_born_date' 	=> $tanggal_lahir,
				'student_born_place' 	=> $tempat_lahir,
				'student_address'		=> $alamat,
				'student_collage'		=> $perguruan_tinggi,
				'student_concentration'	=> $jurusan,
				'student_email'			=> $email,
				'student_social_media'	=> $sosial_media,
				'student_phone_number'	=> $nomer
				);

			
			//$table ="md_student";
			$where =array(
						'student_id' => $student_id
						);

			$this->s_profile_edit_m->update_form($student_id,$data,'md_student');
			redirect(base_url("index.php/s_profile_c"));

		}

		public function update_profile(){
			$student_id = $this->session->userdata('id');

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
						'student_profile' => $fileinfo['file_name']
					);
				$this->s_profile_edit_m->update_form($student_id,$input,'md_student');
			}
			redirect(base_url('index.php/s_profile_c/'));
		}
}

?>
