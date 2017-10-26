<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_list extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('admin/view_list');
	}

	public function set_holiday()
	{
		$this->load->view('admin/set_holiday');
	}

	public function populateTable()
	{
		$dbDate = $this->input->post('dbDate');  //GALING SA JS, DATE NA NAKA Y-M-D FORMAT

		$records = $this->global_model->getRecords('users');
		$timeIn = '';
		$timeOut = '';


		$data = [];
		foreach ($records as $records) 
		{
			$first_name = $records->first_name;
			$last_name = $records->last_name;
			$encoded_id = $records->encoded_id;
			$time_in = $records->time_in;
			$time_out =$records->time_out;

			$DateTimeIn = json_encode($this->global_model->getMin('csv', 'Date', $dbDate, 'after', 'Date', $encoded_id));  //GETS TIME IN FROM NEWDATE

            if($DateTimeIn != '[{"Date":null}]'){
                $explodedDateTimeIn = explode(" ", $DateTimeIn);
                $hhmmssIn = str_replace('"}]', ' ', $explodedDateTimeIn[1]);

                $splitTimeIn = explode(":", $hhmmssIn);
                $timeIn = $splitTimeIn[0].':'.$splitTimeIn[1];  //ETO NA YUNG TIME IN

                    
            }

            $DateTimeOut = json_encode($this->global_model->getMax('csv', 'Date', $dbDate, 'after', 'Date', $encoded_id));  //GETS TIME OUT FROM NEWDATE

            if($DateTimeOut != '[{"Date":null}]'){
                $explodedDateTimeOut = explode(" ", $DateTimeOut);
                $hhmmssOut = str_replace('"}]', ' ', $explodedDateTimeOut[1]);

                $splitTimeOut = explode(":", $hhmmssOut);
                $timeOut = $splitTimeOut[0].':'.$splitTimeOut[1];  //ETO NA YUNG TIME OUT
                     
            }


            $late = strtotime($timeIn) - strtotime($time_in);
            $late = $late/60;

            if ($late < 0)
            {
            	$late = abs($late).' mins early';
            }

            $overtime = strtotime($timeOut) - strtotime($time_out);
            $overtime = $overtime/60;

            if ($overtime < 0)
            {
            	$overtime = 'Left '.abs($late).' mins early';
            }


            if($DateTimeIn != '[{"Date":null}]' || $DateTimeOut != '[{"Date":null}]') {

				$arr = array(
			        $first_name.' '.$last_name,
			        $encoded_id,
			        $timeIn,
			        $timeOut,
			        $overtime.' mins.',
			        $late.' mins.'
			    );

            	$data[] = $arr;
        	}
		}

		echo json_encode($data);


		
	}

	
}
