<?php
/*****
Name: Ras, Lorenz	Course: BSIT	Lab No. 3
Description: Week001B-LaboratoryActivity-Views
*****/

class Contact extends CI_Controller{
	
	public function index(){
		$data["title"] = 'Contact Us';
		$this->load->view('contact',$data);
		
	}
	
	public function submit(){
		//Sender name is required
		$this->form_validation->set_rules('name','Sender Name', 'required');
		//Email must not be empty and must be a valid email format
		$this->form_validation->set_rules('email','E-mail','required|valid_email');
		//Phone must be a number and may not be empty.
		$this->form_validation->set_rules('phone','Phone','required|regex_match[/^[0-9]+$/]');
		//Title is required.
		$this->form_validation->set_rules('title','Title','required');
		//Message must not be empty and should have minimum length of 8.
		$this->form_validation->set_rules('content', 'Message', 'required|min_length[8]');
			
		
		if($this->form_validation->run() === TRUE){
			$this->load->model('contact_model');
			$isInserted = $this->contact_model->submitMessage();
			
			if($isInserted){
				echo "Message Sent";
			}else{
				echo "Error";
			}
			
		}else{
			$this->index();
		}
	}
	
}

?>