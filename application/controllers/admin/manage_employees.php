<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_employees extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('admin/manage_employees');
	}

	public function ajaxGetRow(){
		$data = $this->input->post();
		$result = $this->global_model->getRow($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}

	public function ajaxCountRow(){
		$data = $this->input->post();
		$result = $this->global_model->count($data['table'], $data['set'], $data['value']);
		echo json_encode($result);
	}

	public function ajaxUpdate(){
		$table = $this->input->post('table');		
		$data = $this->input->post();
		unset($data['table']);
		$result = $this->global_model->update($table, $data);
		echo json_encode($result);
	}

	public function populateTable()
	{
		$employees = $this->global_model->getRecords('users');

		$data = [];
		foreach ($employees as $employee) 
		{
			$encoded_id = $employee->encoded_id;
			$action = '<button class="btn btn-block btn-info btn-flat btn-xs edit-btn" style="max-width: 100px; display:block; margin: auto;" data-toggle="modal" data-target="#employee_modal">Edit</button>'; 


			$fullName = $employee->first_name.' '.$employee->last_name;
			$position = $employee->position;
			$timeIn = $employee->time_in;
			$timeOut = $employee->time_out;
			
			$arr = array(
		        $encoded_id,
		        $fullName,
		        $position,
		        $timeIn,
		        $timeOut,
		        $action
		    );

            $data['data'][] = $arr;
		}

		echo json_encode($data);
	}

}
