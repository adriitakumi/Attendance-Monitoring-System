<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class non_compliance_report extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('admin/non_compliance_report');
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

	public function submit()
	{
		$range = $this->input->post('date');  //DATE RANGE
        $encoded_ids = $this->input->post('encoded');  //ENCODED ID NAKA STRING

        $split_id = explode(",", $encoded_ids); //ENCODED ID NA NAKA ARRAY NA

		$explodedRange = explode(" ", $range);
		$startDate = $explodedRange[0];  //START DATE
		$endDate = $explodedRange[2];  //END DATE

		$arrOfDates = $this->global_model->getRange($startDate, $endDate);  //RETURNS ARRAY OF DATES FROM START DATE TO END DATE

		$dtLate = [];
		$dtEarlyOut = [];
		$dtOtal = [];
		$dtAll = [];
		foreach ($split_id as $id) {
			$users = $this->global_model->getRow('users', 'encoded_id', $id);
			foreach ($users as $users) {
				$time_in = $users->time_in;
				$time_out = $users->time_out;
				$first_name = $users->first_name;
				$last_name = $users->last_name;
			}
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

            	if(date('N', strtotime($newDate)) >= 6)
            	{
            	}
            	else{

            	$DateTimeIn = json_encode($this->global_model->getMin('csv', 'Date', $newDate, 'after', 'Date', $id));  //GETS TIME IN FROM NEWDATE

            	if($DateTimeIn != '[{"Date":null}]')
            	{
                    $explodedDateTimeIn = explode(" ", $DateTimeIn);
                    $hhmmssIn = str_replace('"}]', ' ', $explodedDateTimeIn[1]);

                    $splitTimeIn = explode(":", $hhmmssIn);
                    $timeIn = $splitTimeIn[0].':'.$splitTimeIn[1];  //ETO NA YUNG TIME IN

                    $doorDBIn = $this->global_model->selectLike('csv', 'Date', $newDate, 'Date', $timeIn, $id, 'Door');
            		$doorIN = $doorDBIn[0]->Door;                    
                }

                $DateTimeOut = json_encode($this->global_model->getMax('csv', 'Date', $newDate, 'after', 'Date', $id));  //GETS TIME OUT FROM NEWDATE

            	if($DateTimeOut != '[{"Date":null}]')
            	{
            		$explodedDateTime = explode(":", $DateTimeOut);
            		$newerDate = $explodedDateTime[1].':'.$explodedDateTime[2].':'.$explodedDateTime[3];
            		$removeChar1 = str_replace('"', '', $newerDate);
            		$removeChar2 = str_replace('}]', '', $removeChar1);

                    $explodedDateTimeOut = explode(" ", $DateTimeOut);
                    $dateOut = str_replace('[{"Date":"', '', $explodedDateTimeOut[0]);
                    $hhmmssOut = str_replace('"}]', ' ', $explodedDateTimeOut[1]);

                    $splitTimeOut = explode(":", $hhmmssOut);
                    $timeOut = $splitTimeOut[0].':'.$splitTimeOut[1];  //ETO NA YUNG TIME OUT

                    $doorDBOut = $this->global_model->selectLikeOut('csv', 'Date', $removeChar2, $id, 'Door');
            		$doorOUT = $doorDBOut[0]->Door;
                     
                }




                $late = strtotime($time_in) - strtotime($timeIn);  //11-time in nung employee
                $late = $late/60;

                $earlyout = strtotime($timeOut) - strtotime($time_out);  // time out nung employee -5
                $earlyout = $earlyout/60;

                if($late >= 0)
                {
                	$nonComplianceLate = '';
                }
                else
                {
                	$nonComplianceLate = 'Late by '.abs($late).' mins';

                	if($DateTimeIn != '[{"Date":null}]' || $DateTimeOut != '[{"Date":null}]')
	            	{
		                $nclate = array(
		                    $tableDate,
		                    $last_name.' '.$first_name,
		                    $doorIN,
		                    $timeIn,
		                    $doorOUT,
		                    $timeOut,
		                    $nonComplianceLate
		                );

	                	$dtLate[] = $nclate;
	                }
                }

                if($earlyout >= 0)
                {
                	$nonComplianceEarlyOut = '';
                }
                else
                {
                	$nonComplianceEarlyOut = 'Left '.abs($earlyout). ' mins early';

                	if($DateTimeIn != '[{"Date":null}]' || $DateTimeOut != '[{"Date":null}]')
	            	{
		                $ncearly = array(
		                    $tableDate,
		                    $last_name.' '.$first_name,
		                    $doorIN,
		                    $timeIn,
		                    $doorOUT,
		                    $timeOut,
		                    $nonComplianceEarlyOut
		                );

	                	$dtEarlyOut[] = $ncearly;
	                }
                }

                if($earlyout >= 0 || $late >= 0)
                {
                	$nonCompliance = '';
                }
                else
                {
                	$nonCompliance = 'Late by '.abs($late).' mins <br>Left '.abs($earlyout). ' mins early';

                	if($DateTimeIn != '[{"Date":null}]' || $DateTimeOut != '[{"Date":null}]')
	            	{
		                $noncompliant = array(
		                    $tableDate,
		                    $last_name.' '.$first_name,
		                    $doorIN,
		                    $timeIn,
		                    $doorOUT,
		                    $timeOut,
		                    $nonCompliance
		                );

	                	$dtOtal[] = $noncompliant;
	                }
                }

                if($late < 0)
                {
                	$nonComplianceAll = 'Late by '.abs($late).' min/s';

                	if($DateTimeIn != '[{"Date":null}]' || $DateTimeOut != '[{"Date":null}]')
	            	{
		                $ncAllLate = array(
		                    $last_name.' '.$first_name,
		                    $tableDate,
		                    $doorIN,
		                    $timeIn,
		                    $doorOUT,
		                    $timeOut,
		                    $nonComplianceAll
		                );

	                	$dtAll[] = $ncAllLate;
	                }
                }
                if($earlyout < 0)
                {
                	$nonComplianceAll = 'Early out by '.abs($earlyout).' min/s';

                	if($DateTimeIn != '[{"Date":null}]' || $DateTimeOut != '[{"Date":null}]')
	            	{
		                $ncAllEarly = array(
		                    $last_name.' '.$first_name,
		                    $tableDate,
		                    $doorIN,
		                    $timeIn,
		                    $doorOUT,
		                    $timeOut,
		                    $nonComplianceAll
		                );

	                	$dtAll[] = $ncAllEarly;
	                }
                }
            }

                
            }		
		}	
			$data['dtLate'] = json_encode($dtLate);
			$data['dtEarlyOut'] = json_encode($dtEarlyOut);
			$data['dtOtal'] = json_encode($dtOtal);
			$data['dtAll'] = json_encode($dtAll);
			//print_r($data['dtAll']); exit;
			$this->load->view('admin/non_compliants', $data);
	}

}
