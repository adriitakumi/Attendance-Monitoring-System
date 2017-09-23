<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_ranges extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/view_ranges');
	}

	public function show_range()
	{
		$this->load->view('admin/show_range');
	}

}