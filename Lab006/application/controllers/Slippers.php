<?php
	class Slippers extends CI_Controller{
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			$data["title"] = 'Slipper Products';
			
			$this->load->model('slippers_model');
			$data["slippers"] = $this->slippers_model->getSlippers();
			
			$this->load->view('slippers',$data);
		}
		
		public function edit($slipper_id=''){
			if($slipper_id){
				$data["title"] = 'Edit slipper';
				
				$this->load->model('slippers_model');
				$data["slipper"] = $this->slippers_model->getSlippers($slipper_id);
				
				if($data["slipper"]){
					$this->load->view('slipper_edit',$data);
				}
			}else{
				redirect(base_url('slippers'));
			}
		}
		
		public function verifyEdit(){
			
			$slipper_id = $this->uri->segment(3);
			$this->form_validation->set_rules('slipper_name','Slipper Name', 'required');
			$this->form_validation->set_rules('price','Price', 'required|decimal');
			
			if($this->form_validation->run()===TRUE){
				$this->load->model('slippers_model');
				$isUpdated = $this->slippers_model->update($slipper_id);

				if($isUpdated){
					echo "Updated";
				}else{
					echo "Not Updated!";
				}
			}else{
				$this->edit($slipper_id);
			}
			
		}
		
		public function delete($slipper_id=''){
			$this->load->model('slippers_model');
			$data["slipper"] = $this->slippers_model->getSlippers($slipper_id);
			
			if($data["slipper"]){
				$isDeleted = $this->slippers_model->delete($slipper_id);
				if($isDeleted){
					//echo 'Deleted';
					$this->session->set_flashdata('statusColor', 'green');
					$this->session->set_flashdata('statusMessage','Deleted successfully!');
				}else{
					//echo "Not Deleted!";
					$this->session->set_flashdata('statusColor', 'red');
					$this->session->set_flashdata('statusMessage','Delete Failed!');
				}
			}else{
				redirect(base_url('slippers'));
			}
		}
	}

	
?>