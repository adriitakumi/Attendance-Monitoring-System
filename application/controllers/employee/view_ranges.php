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

	public function populateTable()
	{
		$range = $this->input->post('dateRange');  //DATE RANGE
        $encoded_id = $this->input->post('encoded_id');  //PERSON
        $time_in = $this->input->post('DBtime_in');
        $time_out = $this->input->post('DBtime_out');


		$explodedRange = explode(" ", $range);
		$startDate = $explodedRange[0];  //START DATE
		$endDate = $explodedRange[2];  //END DATE

		$arrOfDates = $this->global_model->getRange($startDate, $endDate);  //RETURNS ARRAY OF DATES FROM START DATE TO END DATE

		$data = [];
		foreach ($arrOfDates as $date)
            {	
            	$explodedDate = str_split($date);
            	$y1 = $explodedDate[0];
            	$y2 = $explodedDate[1];
            	$y3 = $explodedDate[2];
            	$y4 = $explodedDate[3];
            	$m1 = $explodedDate[4];
            	$m2 = $explodedDate[5];
            	$d1 = $explodedDate[6];
            	$d2 = $explodedDate[7];
            	$newDate = $y1.$y2.$y3.$y4.'-'.$m1.$m2.'-'.$d1.$d2;
            	$tableDate = $m1.$m2.'-'.$d1.$d2.'-'.$y1.$y2.$y3.$y4;
            	$timeIn = '';
            	$timeOut = '';

            	$DateTimeIn = json_encode($this->global_model->getMin('csv', 'Date', $newDate, 'after', 'Date', $encoded_id));  //GETS TIME IN FROM NEWDATE

            	if($DateTimeIn != '[{"Date":null}]'){
                    $explodedDateTimeIn = explode(" ", $DateTimeIn);
                    $hhmmssIn = str_replace('"}]', ' ', $explodedDateTimeIn[1]);

                    $splitTimeIn = explode(":", $hhmmssIn);
                    $timeIn = $splitTimeIn[0].':'.$splitTimeIn[1];  //ETO NA YUNG TIME IN

                    
                }

                $DateTimeOut = json_encode($this->global_model->getMax('csv', 'Date', $newDate, 'after', 'Date', $encoded_id));  //GETS TIME OUT FROM NEWDATE

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

                if($DateTimeIn != '[{"Date":null}]' || $DateTimeOut != '[{"Date":null}]')
                	{

		                $arr = array(
		                    $tableDate,
		                    $timeIn,
		                    $timeOut,
		                    $late.' mins.',
		                    $overtime.' mins.'
		                );

                    	$data[] = $arr;
                   }
            	

            }

			echo json_encode($data);
	}
	

}
