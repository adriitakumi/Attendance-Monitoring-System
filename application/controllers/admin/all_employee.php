<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class all_employee extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('admin/all_employee');
	}

	
}
