<?php
class login_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function login($username, $password){
		$condition_array = array(
			'user_name' => $username,
			'user_pass' => md5($password)
			);
		
		$rs = $this->db->get_where('_users', $condition_array);	
		
		$row_count = $rs->num_rows();
		
		if($row_count > 0){
			echo "success";
			return $rs->row_array();
		}else{
			return FALSE;
		}
	}
}

?>