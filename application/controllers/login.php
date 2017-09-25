<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{	
		if(isset($this->session->logged_in)) {
			redirect('employee/dashboard/index');
		}
		else {
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
				
			if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('login/login');
				}
			
			else
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$result = $this->users_model->checkUserPassword($email, $password);

				if(is_object($result)){
					//print_r($result);


					$userdata = array(
					        'email'  => $result->email,
					        'first_name'     =>  $result->first_name,
					        'last_name'     =>  $result->last_name,
					        'position'     =>  $result->position,
					        'encoded_id'     =>  $result->encoded_id,
					        'time_in'     =>  $result->time_in,
					        'time_out'     =>  $result->time_out,
					        'contact_number' => $result->contact_number,
					        'date_created' => $result->date_created,
					        'logged_in' => TRUE
					);

					$this->session->set_userdata($userdata);
					$level = $result->position;

					if($level=='admin'){
						redirect('admin/dashboard/index');
					} else{
						redirect('employee/dashboard/index');
					}
				}
				else if($result==1){
					$data['userError'] = "Email does not exist!";
					$this->load->view('login/login', $data);
				}
				else if($result==2){
					$data['passError'] = "Incorrect password!";
					$this->load->view('login/login', $data);
				}
			}	
		}

	}

	public function logout(){
			session_destroy();
			redirect();	
		}
	

}

?>
