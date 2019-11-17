<?php
class login extends CI_Controller {
	
	public function index(){
		$data['title'] = 'Login';
		
		$this->load->view('login', $data);
	}
	
	public function verify(){
		$this->form_validation->set_rules('txtuser', 'Username', 'required');
		$this->form_validation->set_rules('txtpass','Password', 'required|callback_check_user');
		
		if($this->form_validation->run() === TRUE){
			if($this->session->user_lvl == 1){
				redirect('admin/home');
			}else{
				redirect('home');
			}
		}else{
			$this->index();
		}
	}
	
	public function check_user(){
		$username = $this->input->post('txtuser');
		$password = $this->input->post('txtpass');
		
		$this->load->model('login_model');
		$login = $this->login_model->login($username, $password);
		
		if($login){
			$sess_data = array(
				'user_name' => $login['user_name'],
				'user_lvl' => $login['user_lvl'],
				'customer_id' => $login['customer_id'],
				'islogged' => TRUE
			);
			
			$this->session->set_userdata($sess_data);
			return true;
		}else{
			$this->form_validation->set_message('check_user', 'Invalid Username/password');
			return false;
		}
	}
}


?>