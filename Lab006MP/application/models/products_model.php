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
		
	public function getProducts($id=null){
		if($id==null){
			$rs = $this->db->get('products');
			return $rs->result_array();
		}else{
			$rs = $this->db->get_where('products', array('product_id' => $id));
			return $rs->row_array();
		}
	}
	
	public function update($id){
		$data = array(
			'name' => $this->input->post('product_name'),
			'description' => $this->input->post('description'),
			'price'=> $this->input->post('price')
		);
		
		$this->db->where('product_id', $id);
		return $this->db->update('products', $data);
	}
	
	public function delete($id){
		return $this->db->delete('products', array('product_id' => $id));
	}
}

	?>

