<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('employee/dashboard');
	}

	public function attendance()
	{
		$data['AMADOR']  = json_encode($this->global_model->getRow('csv','encoded_id','747'));
		print_r($data); exit;
		$this->load->view('employee/attendance', $data);
	}

	public function profile()
	{
		$this->load->view('employee/profile');
	}

	

}
