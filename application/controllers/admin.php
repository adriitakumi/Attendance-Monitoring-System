<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function view_list()
	{
		$this->load->view('admin/view_list');
	}

	public function view_grid()
	{
		$this->load->view('admin/view_grid');
	}

	public function view_profile()
	{
		$this->load->view('admin/view_profile');
	}

	public function upload_file()
	{
		$this->load->view('admin/upload');
	}

	public function upload()
	{
		$this->load->view('admin/upload2');
	}

	public function manage_employees()
	{
		$this->load->view('admin/manage_employees');
	}

	public function leaderboard()
	{
		$this->load->view('admin/leaderboard');
	}
}
