<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class set_holiday extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('admin/set_holiday');
	}

	public function populateTable()
	{
		$month = $this->input->post('month');  //GALING SA JS, DATE NA NAKA Y-M-D FORMAT

		$holidays = $this->global_model->getRow('holidays', 'month', $month);

		$data = [];
		foreach ($holidays as $holiday) 
		{
			$id = $holiday->id;
			$date = $holiday->date;
			$dbmonth = $holiday->month;
			$name = $holiday->name;


				$arr = array(
			        $date,
			        $name
			    );

            	$data[] = $arr;
		}

		echo json_encode($data);


		
	}


	
}
