<?php
/**
* 
*/
class M_nilai_edit_c extends CI_Controller{
		function __construct(){
				parent::__construct();
				if($this->session->userdata('login_level') !=1){
				redirect(base_url("index.php/login_c"));
			}
				$this->load->model('m_nilai_edit_m');
				$this->load->helper('url');
		}

	

		// public function nilai_edit($project_id){
		// 	$data['mg_project'] = $this->m_nilai_edit_m->nilai_edit($project_id)->result();
		// 	$this->template->load('m_static_v','m_nilai_edit_v',$data);
		// }

		public function update_form(){
			$project_id     = $this->input->post('id-nilai');
			$kedisiplinan 	= $this->input->post('discipline');
			$etika 			= $this->input->post('ethic');
			$inisiatif 		= $this->input->post('inisiative');
			$durasi 		= $this->input->post('due');
			$pengetahuan	= $this->input->post('knowledge');

			$data = array (
				'project_discipline' => $kedisiplinan,
				'project_work_ethic' => $etika,
				'project_inisiative' => $inisiatif,
				'project_due_date'	 => $durasi,
				'project_knowledge'	 => $pengetahuan
				);

			$where = array (
				'project_id' => $project_id
				);

			$this->m_nilai_edit_m->update_nilai($where,$data,'mg_project');
			//redirect(base_url("index.php/m_nilai_c"));

		}

}

