<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_final_report_c extends CI_Controller {

	public function index()
	{
		$this->template->load('m_static_v','m_final_report_v');
	}
}
