<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class upload extends CI_Controller {

   public function __construct() {
      parent::__construct();
   }

   public function index(){
      $this->load->view('admin/upload', array('error' => ' ' ));
   }

   public function do_upload(){
      $config = array(
      'upload_path' => "./uploads/",
      'allowed_types' => "csv",
      'overwrite' => TRUE,
      'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
      'max_height' => "768",
      'max_width' => "1024"
      );


      

      $this->load->library('upload');
      $this->upload->initialize($config);
      if($this->upload->do_upload())
      {

         $file_p = $this->upload->data('full_path');

        $input = explode("\n", file_get_contents($file_p));
        foreach ($input as $line) {
        // process all lines.
        }

        // This function removes first 100 elements.
        // More info:
        // http://php.net/manual/en/function.array-slice.php
        $output = array_slice($input, 3);
        file_put_contents($file_p, implode("\n", $output));

        $file = file_get_contents($file_p);
        $file = str_replace("\"\",\"Transaction\",\"Person\",\"Encoded ID\",\"Door\"", "Date,Transaction,Person,encoded_id,Door", $file);
        $file = str_replace("\"\",\"ALL ACCESS ATTEMPTS HISTORY REPORT\"", " ", $file);


        file_put_contents($file_p, $file);

        $this->load->library('csv_reader');
        $result =   $this->csv_reader->parse_file($file_p);//path to csv file

        $i=0;
        foreach ($result as $row=>$res) {
          $i++;
          $datetime = $res['Date'];
          $arr = explode(" ",$datetime); 
          $date = $arr[0];
          $time = $arr[1];
          $dateExploded = explode("/",$date); 
          /*$m = $dateExploded[0]; $d = $dateExploded[1]; $y = $dateExploded[2];
          $db_date = $y.'/'.$m.'/'.$d.' '.$time;
          $result[$i]['Date'] = $db_date;*/
          //DI KO TALAGA ALAM PANO NAGING Y-M-D YUNG FORMAT EH
        }


         $this->global_model->insert_batch('csv', $result);
         $data['csvData'] =  $result;
         $this->load->view('admin/upload_success', $data);
      }
      else
      {
         $error = array('error' => $this->upload->display_errors());
         $this->load->view('admin/upload', $error);
      }
   }
}
?>