<?php
class Account_login extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){	

		$data['title'] = 'Account Login';
		$this->load->view('account_login',$data);
	}
	
	public function verify(){
		$this->form_validation->set_rules('txtuser','Username','required');
		$this->form_validation->set_rules('txtpass','Password','required|callback_check_user');
		
		if($this->form_validation->run() == TRUE){
			echo 'Success';
		}else{
			$this->index();
		}
		
	}
	
	public function check_user(){
		$username = $this->input->post('txtuser');
		$password = $this->input->post('txtpass');
		
		$this->load->model('accounts_login_model');
		$login = $this->accounts_login_model->login($username,$password);
		
		if($login){
			return true;
		}else{

			if(isset($_SESSION['error_count'][$username])){
				
				$_SESSION['error_count'][$username] += 1;
			}else{
				//echo $username;
				$_SESSION['error_count'][$username] = 1;
			}
			
			//echo $_SESSION['error_count'][$username].'  ';
			
			$isBlocked = $this->accounts_login_model->isBlocked($username);
			if($isBlocked){
				$this->form_validation->set_message('check_user', 'Account is temporarily blocked');
			}else if(isset($_SESSION['error_count'][$username]) && $_SESSION['error_count'][$username]>2){
				$this->accounts_login_model->block($username);
				$this->form_validation->set_message('check_user','3 consecutive failed login attempts. Account Blocked');
			}else{
				$this->form_validation->set_message('check_user', 'Invalid Username/password');
			}
			return false;
		}
	}
}


?>