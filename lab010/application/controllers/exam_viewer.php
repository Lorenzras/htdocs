<?php
class Exam_viewer extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->helper('exam');
		$this->load->model('exam_viewer_model');
		$data["results"] = $this->exam_viewer_model->getExam(CUR_SEM, CUR_SCH_YR);
		$data["title"] = 'Exam Results';
		$this->load->view('exam_viewer', $data);
	}
}

?>