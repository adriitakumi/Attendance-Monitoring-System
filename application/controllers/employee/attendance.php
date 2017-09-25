<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class attendance extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('employee/attendance');
	}

	public function populateTable()
	{
		$dbDate = $this->input->post('dbDate');  //GALING SA JS, DATE NA NAKA Y-M-D FORMAT
		$encoded_id = $this->input->post('encoded_id');

		$records = $this->global_model->getLike('csv', 'Date', $dbDate, 'after', $encoded_id);


		$data = [];
		foreach ($records as $records) 
		{
			$arr = array(
		        $records->Date,
		        $records->encoded_id,
		        $records->Person,
		        $records->Door
		    );

            $data[] = $arr;
		}

		echo json_encode($data);


		
	}

	public function ajaxMinUrl()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('value');
		$wildcard = $this->input->post('wildcard');
		$encoded_id = $this->input->post('encoded_id');
		$records = json_encode($this->global_model->getMin($table, $set, $value, $wildcard, 'Date', $encoded_id));
		echo $records;
	}

	public function ajaxMaxUrl()
	{
		$table = $this->input->post('table');
		$set = $this->input->post('set');
		$value = $this->input->post('value');
		$wildcard = $this->input->post('wildcard');
		$encoded_id = $this->input->post('encoded_id');
		$records = json_encode($this->global_model->getMax($table, $set, $value, $wildcard, 'Date', $encoded_id));
		echo $records;
	}	

}
