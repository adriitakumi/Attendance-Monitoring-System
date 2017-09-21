<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_list extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/view_list');
	}
}
