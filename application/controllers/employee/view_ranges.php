<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_ranges extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('employee/view_ranges');
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

	public function ajaxArrObj()
	{
		$date1 = $this->input->post('date1');
		$date2 = $this->input->post('date2');
		$records = json_encode($this->global_model->please($date1, $date2));
		echo $records;
	}
	

}