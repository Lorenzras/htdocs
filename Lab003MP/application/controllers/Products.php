<?php
/*****
Name: Ras, Lorenz	Course: BSIT
*****/

class Products extends CI_Controller{
	//manually load the model.
	public function __construct(){
		parent::__construct();
		$this->load->model('products_model');
	}
	
	//Load all contents of products table.
	public function index(){
		$data["title"] = "Food Menu";
		//call get_products method with empty parameter.
		$data["products"] = $this->products_model->get_products();
		
		$this->load->view('pages/foods', $data);
	}
	
	
	public function view($foodName = NULL){
		//call get_products method to return specific row.
		$data['product'] = $this->products_model->get_products($foodName);
		
		//display 404 page if invalid.
		if(empty($data['product'])){
			show_404();
		}
		
		//assign name column's value to title variable.
		$data['title'] = $data['product']['name'];
		
		//load the food page, and pass values of $data[].
		$this->load->view('pages/food', $data);
	}
		
}
?>