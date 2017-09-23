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
		$explodedRange = explode(" ", $range);
		$startDate = $explodedRange[0];  //START DATE
		$endDate = $explodedRange[2];  //END DATE

		$arrOfDates = $this->global_model->please($startDate, $endDate);  //RETURNS ARRAY OF DATES FROM START DATE TO END DATE

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

            	$DateTimeIn = json_encode($this->global_model->getMin('csv', 'Date', $newDate, 'after', 'Date'));  //GETS TIME IN FROM NEWDATE

            	if($DateTimeIn != '[{"Date":null}]'){
                    $explodedDateTimeIn = explode(" ", $DateTimeIn);
                    $hhmmssIn = str_replace('"}]', ' ', $explodedDateTimeIn[1]);

                    $splitTimeIn = explode(":", $hhmmssIn);
                    $timeIn = $splitTimeIn[0].':'.$splitTimeIn[1];  //ETO NA YUNG TIME IN

                    
                }

                $DateTimeOut = json_encode($this->global_model->getMax('csv', 'Date', $newDate, 'after', 'Date'));  //GETS TIME OUT FROM NEWDATE

            	if($DateTimeOut != '[{"Date":null}]'){
                    $explodedDateTimeOut = explode(" ", $DateTimeOut);
                    $hhmmssOut = str_replace('"}]', ' ', $explodedDateTimeOut[1]);

                    $splitTimeOut = explode(":", $hhmmssOut);
                    $timeOut = $splitTimeOut[0].':'.$splitTimeOut[1];  //ETO NA YUNG TIME OUT
                     
                }

                if($DateTimeIn != '[{"Date":null}]' || $DateTimeOut != '[{"Date":null}]')
                	{

		                $arr = array(
		                    $tableDate,
		                    $timeIn,
		                    $timeOut,
		                    'WALA PANG OT',
		                    'WALA PANG LATE'
		                );

                    	$data[] = $arr;
                   }
            	

            }

			echo json_encode($data);
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
