<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class upload extends CI_Controller {

   public function __construct() {
      parent::__construct();
   }

   public function upload_view(){
      $this->load->view('backend/upload_view', array('error' => ' ' ));
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
         $this->load->library('csv_reader');
         $filee = 'C:\wamp64\www\slaxis\uploads';
         $result = $this->csv_reader->parse_file($filee);//path to csv file

         echo $result; exit;

         $i=0;
         foreach ($result as $row=>$res) {
           $i++;
           $datetime = $res['Date'];
           $arr = explode(" ",$datetime); 
           $date = $arr[0];
           $time = $arr[1];
           $dateExploded = explode("/",$date); 
           $m = $dateExploded[0]; $d = $dateExploded[1]; $y = $dateExploded[2];
           $db_date = $y.'/'.$m.'/'.$d.' '.$time;
           $result[$i]['Date'] = $db_date;
         }

         $this->global_model->insert_batch('csv', $result);
         $data['csvData'] =  $result;
         $this->load->view('backend/upload_success', $data); 
      }
      else
      {
         $error = array('error' => $this->upload->display_errors());
         $this->load->view('backend/upload_view', $error);
      }
   }
}
?>