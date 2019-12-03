<?php
class login extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['title'] = 'Account Login';
		$this->load->view('index_login',$data);
	}
	
	public function verify(){
		$this->form_validation->set_rules('txtUsername','Username','required|trim');
		
		$this->form_validation->set_rules('txtPassword','Password',"required|trim|min_length[4]|check_user");
		
		if($this->form_validation->run() === TRUE){
			
			echo 'Success';
		}else{
			
			$this->index();
		}
		
	}
	/*
	public function check_user(){
		$username = $this->input->post('txtUsername');
		$password = $this->input->post('txtPassword');
		echo 'jeheheh';
		$this->load->model('accounts_login_model');
		$login = $this->accounts_login_model->login($username,$password);
		
		if($login){
			return true;
		}else{
			$isBlocked = $this->accounts_login_model->isBlocked($username);
			
			if($isBlocked){
				
				$this->form_validation->set_message('check_user', 'Account is temporarily blocked.');
			}else{
								
				if(!empty($_SESSION['error_count'][$username])){
					if($_SESSION['error_count'][$username]>2){
						$this->accounts_login_model->block($username);
					$this->form_validation->set_message('check_user','3 consecutive failed login attempts. Account Blocked');
					}else{
						$_SESSION['error_count'][$username] += 1;
					}
				}else{
					$_SESSION['error_count'][$username] = 1;
				}
			 
			}
			return FALSE;
				
		}
		
	}*/
	
}

?>