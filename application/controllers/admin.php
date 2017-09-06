<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function view_list()
	{
		$this->load->view("admin/view_list");
	}

	public function view_grid()
	{
		$this->load->view("admin/view_grid");
	}

}
