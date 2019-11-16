<?php
/*****
Name: Ras, Lorenz	Course: BSIT
*****/

class Products_model extends CI_Model{
	//Manually load database.
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	//Method to get data from the products table.
	//It accepts one paramater to specify the row to be returned.
	public function get_products($foodName = null){		
		if($foodName==null){ 
			//If parameter is empty, return all rows.
			$rs = $this->db->get('products');
			return $rs->result_array();
		}else{
			//otherwise, return  specific row based parameter.
			//This query can also handle data with spaces.
			$rs = $this->db->get_where('products', array('name' => urldecode($foodName)));
			return $rs->row_array();
		}
	}
}


?>