<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class generate_report extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('admin/generate_report');
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

			

			$arr = array(
			    //$check,
			    $encoded_id,
			    $first_name,
			    $last_name
			    );

            	$data['data'][] = $arr;
		}

		echo json_encode($data);


		
	}
	
}
