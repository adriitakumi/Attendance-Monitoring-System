<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_list extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/view_list');
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
