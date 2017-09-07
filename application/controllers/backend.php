<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class backend extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function upload_view()
	{
		$this->load->view('backend/upload_view');

	}

	

}
