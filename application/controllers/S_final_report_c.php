<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class S_final_report_c extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('S_final_report_m');
        $this->load->model('s_header_m');
        $this->load->helper(array('form', 'url'));
    }

	public function read(){
        $student_id = $this->session->userdata('id');
        $data1['notifikasi'] = $this->s_header_m->read($student_id)->result();
        $data2['mg_project'] = $this->S_final_report_m->select_project($student_id)->result();
        $data = $data1 + $data2;
        if($this->input->is_ajax_request()){
            $this->load->view('s_final_report_v',$data);
        }else{
            $this->template->load('static_v','s_final_report_v',$data);
        }
		
	}

	public function do_upload(){
        //$image_path = realpath(APPPATH . './assets/gambar');
        $student_id = $this->session->userdata('id');
        $select = $this->S_final_report_m->select_project($student_id)->row();
        $project_id = $select->project_id;

        $config['upload_path']          = './assets/final_project';
        $config['allowed_types']        = 'rar|zip|tar';
        $config['max_size']             = 0;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('userfile')){
	        $error = array('error' => $this->upload->display_errors());
	        $this->template->load('static_v','s_final_report_v',$error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $fileinfo = $this->upload->data();
            $data = array(
                    'project_final_report' => $fileinfo['file_name']
                );
            $where = array('project_id' => $project_id);
            $this->S_final_report_m->update_final_report($where,$data,'mg_project');
            // $this->template->load('static_v','s_final_report_v',$data);
            $this->read();
        }
    }
}
