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

	public function populateTable()
	{
		$records = $this->global_model->getRecords('users');
		//$check = '<input type="checkbox" class="minimal-red check">';



		$data = [];
		foreach ($records as $records) 
		{
			$first_name = $records->first_name;
			$last_name = $records->last_name;
			$encoded_id = $records->encoded_id;
			$checkbox = '<input type="checkbox" class="minimal-red check11" name="check[]" value="'.$encoded_id.'">';

			

			$arr = array(
			    $checkbox,
			    $encoded_id,
			    $last_name,
			    $first_name
			    );

            	$data['data'][] = $arr;
		}

		echo json_encode($data);

		
	}

	public function confirmSelection()
	{
		$encoded_ids = $this->input->post('encoded_ids');
		$data = $this->global_model->getWhereIn('users', 'encoded_id', $encoded_ids);

		echo json_encode($data);

		
	}
}
