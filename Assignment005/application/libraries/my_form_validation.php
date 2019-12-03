<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_Form_validation extends CI_Form_validation {
	
	public function __construct($rules = array()){
		parent::__construct($rules);
		//$CI =& get_instance();
	}
	
	
	public function check_user(){
		
		$this->CI->load->model('accounts_login_model');
		$username = $this->CI->input->post('txtUsername');
		$password = $this->CI->input->post('txtPassword');
		$isValidated = FALSE;
		
		$isBlocked = $this->CI->accounts_login_model->isBlocked($username);
		
		if($isBlocked){ //check db if user is blocked.
			$this->set_message('check_user', 'Account is temporarily blocked. An E-mail to unblock your account has been sent.');
		}else{
			
			$login = $this->CI->accounts_login_model->login($username,$password);
			
			if($login){
				$isValidated = TRUE;
				$_SESSION['error_count'][$username] = 1;
			}else{
				$this->set_message('check_user','Invalid Username/Password.');
				
				if(!empty($_SESSION['error_count'][$username])){
					if($_SESSION['error_count'][$username] > 2){
						$this->CI->accounts_login_model->block($username);
						
						if($_SESSION['error_count'][$username] == 3){
							$this->set_message('check_user','3 consecutive failed login attempts. Account Blocked. An E-mail to unblock your account has been sent.');
						}else{
							//if more than 3 failed login atttempts, simulate blocked account to help against reversed bruteforce attack.
							$this->set_message('check_user','Account is temporarily blocked.An E-mail to unblock your account has been sent.');  
						}
					}
					$_SESSION['error_count'][$username] += 1;
				}else{
					$_SESSION['error_count'][$username] = 1;
				}
			}
			
				
		}
		
		return $isValidated;
	}
}

?>