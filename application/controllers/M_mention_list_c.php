<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mention_list_c extends CI_Controller {

	public function index()
	{
		$this->template->load('m_static_v','m_mention_list_v');
	}
}
