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
		$this->load->view('employee/attendance', $data);
	}

	public function profile()
	{
		$this->load->view('employee/profile');
	}

	public function view_ranges()
	{
		$this->load->view('employee/view_ranges');
	}

	public function ajax()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('value');
		$wildcard = $this->input->post('wildcard');
		$records = json_encode($this->global_model->getLike($table, $set, $value, $wildcard));
		echo $records;
	}

	public function ajaxMinUrl()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('value');
		$wildcard = $this->input->post('wildcard');
		$records = json_encode($this->global_model->getMin($table, $set, $value, $wildcard, 'Date'));
		echo $records;
	}

	public function ajaxMaxUrl()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('value');
		$wildcard = $this->input->post('wildcard');
		$records = json_encode($this->global_model->getMax($table, $set, $value, $wildcard, 'Date'));
		echo $records;
	}

	

}
