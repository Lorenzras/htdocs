<?php

class GuestBook extends CI_Controller{
	
	public function index(){
		$data["title"] = 'Duterte RealEstate';
		
		$this->load->view('content_register',$data);
	}
	
	public function submit(){

		
		$this->form_validation->set_rules('fname','First Name', 'required');
		$this->form_validation->set_rules('lname','Last Name', 'required');
		
		if(set_value("contactOption")=='E-mail'){
			$this->form_validation->set_rules('contact','E-mail','required|valid_email');
		}else if(set_value("contactOption")=='Phone'){
			$this->form_validation->set_rules('contact','Phone','required|regex_match[/^[0-9]+$/]');
		}else{
			$this->form_validation->set_rules('contactOption','Contact Option', 'required');
		}
		
		$this->form_validation->set_rules('comment', 'Comment', 'required|min_length[8]');
	
		
		
		if($this->form_validation->run() === TRUE){
			
			$this->load->view('content_confirm');
		}else{
			$this->index();
		}
	}
}


?>