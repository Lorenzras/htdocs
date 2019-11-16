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
		$data["products"] = $this->products_model->getProducts();
		
		$this->load->view('pages/foods', $data);
	}
	
	
	public function view($id = NULL){

		$data["product"] = $this->products_model->getProducts($id);
		
		if(empty($data["product"])){
			show_404();
		}

		$data["title"] = $data["product"]["name"];
		
		$this->load->view('pages/food', $data);
	}
	
	public function verifyEdit(){
			
			$product_id = $this->uri->segment(3);
			$this->form_validation->set_rules('product_name','Product Name', 'required');
			$this->form_validation->set_rules('description','Description', 'required');
			$this->form_validation->set_rules('price','Price', 'required|decimal');
			
			if($this->form_validation->run()===TRUE){
				$this->load->model('products_model');
				$isUpdated = $this->products_model->update($product_id);

				if($isUpdated){
					$this->session->set_flashdata('statusColor', 'green');
					$this->session->set_flashdata('statusMessage','Updated successfully!');
				}else{
					$this->session->set_flashdata('statusColor', 'red');
					$this->session->set_flashdata('statusMessage','Update Failed!');
				}
				redirect(base_url('products'));
			}else{
				$this->edit($product_id);
			}
			
	}
	
	public function edit($id = NULL){
		if($id){
			$data["title"] = 'Edit';

			$this->load->model('products_model');
			$data["product"] = $this->products_model->getProducts($id);
			if($data["product"]){
				$this->load->view('product_edit',$data);
			}
		}else{
			redirect(base_url('products'));
		}
		
	}
	
	public function delete($id=''){
		$this->load->model('products_model');
		$data["product"] = $this->products_model->getProducts($id);

		if($data["product"]){
			$isDeleted = $this->products_model->delete($id);
			if($isDeleted){

				$this->session->set_flashdata('statusColor', 'green');
				$this->session->set_flashdata('statusMessage','Deleted successfully!');
			}else{

				$this->session->set_flashdata('statusColor', 'red');
				$this->session->set_flashdata('statusMessage','Delete Failed!');
			}
		}
		redirect(base_url('products'));
	}
}
?>