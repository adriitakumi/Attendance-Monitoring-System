<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_data extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->sla_session->checkSession();
	}

	public function index()
	{
		$this->load->view('admin/view_list');
	}

	public function ajax()
	{
		$result = $this->global_model->getRecords('csv', 'desc', 'Date');
		$action = "<center>
                    <button data-toggle='modal' id='view-btn' data-target='#modal-view' class='btn btn-default btn-xs view-btn'><span class='fa fa-fw fa-search'></span></button>
                    <button data-toggle='modal' data-target='#modal-edit' class='btn btn-default btn-xs edit-btn'><span class='fa fa-fw fa-pencil'></span></button>                    
                    <button data-toggle='modal' data-target='#modal-delete' class='btn btn-default btn-xs delete-btn'><span class='fa fa-fw fa-remove'></span></button>                
                  </center>";

		$data = [];
        foreach ($result as $value)
            {	
            	
            	
                $arr = array(
                    $value->Date,
                    $value->Person,
                    $value->encoded_id,
                    $Door,
                    $action
                );
                $data['data'][] = $arr;
            }
		echo json_encode($data);
	}
	
}
