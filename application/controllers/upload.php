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
         $result =   $this->csv_reader->parse_file('c:/wamp/www/slaxis/uploads/1.csv');//path to csv file

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

   public function readExcel()
   {
        $this->load->library('csv_reader');
        $result =   $this->csvreader->parse_file('c:/wamp/www/slaxis/uploads/1.csv');//path to csv file

        $data['csvData'] =  $result;
        $this->load->view('backend/upload_success', $data);  
   }
}
?>