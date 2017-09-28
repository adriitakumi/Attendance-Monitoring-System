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

		$data = [];
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

            	$DateTimeIn = json_encode($this->global_model->getMin('csv', 'Date', $newDate, 'after', 'Date', $id));  //GETS TIME IN FROM NEWDATE

            	if($DateTimeIn != '[{"Date":null}]'){
                    $explodedDateTimeIn = explode(" ", $DateTimeIn);
                    $hhmmssIn = str_replace('"}]', ' ', $explodedDateTimeIn[1]);

                    $splitTimeIn = explode(":", $hhmmssIn);
                    $timeIn = $splitTimeIn[0].':'.$splitTimeIn[1];  //ETO NA YUNG TIME IN

                    
                }

                $DateTimeOut = json_encode($this->global_model->getMax('csv', 'Date', $newDate, 'after', 'Date', $id));  //GETS TIME OUT FROM NEWDATE

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
		                    $first_name.' '.$last_name,
		                    $id,
		                    $timeIn,
		                    $timeOut,
		                    $late.' mins.',
		                    $overtime.' mins.'
		                );

                    	$data[] = $arr;
                   }
            	

            }		
		}
			$data['dtData'] = json_encode($data);
			$this->load->view('admin/generated_report', $data);
	}

}
