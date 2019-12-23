<?php
class query extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('reports_model');
	}
	
	public function index(){
		$data['title'] = 'Queries';
		$this->load->view('queries',$data);
		
	}
	
	public function enrolled_students(){
		$data['title'] = 'Enrolled Students Query';
		
		if($this->uri->segment(3)=='view'){
			if(!isset($_POST['btnsubmit'])){
				redirect(base_url('query/enrolled_students'));
			}
			
			
			$datestart = $this->input->post('txtdatestart');
			$dateend = $this->input->post('txtdateend');
			
			$data['students'] = $this->reports_model->query_enrolledStudents_dataBetween($datestart,$dateend);
			$this->load->view('query_enrolled_students', $data);
			
		}else{
			
			$this->load->view('query_form_enrolled_students', $data);
		}
		
	}
	
	public function enrollment_summary(){
		$data['title'] = 'Enrollment Summary';
		$data['count_enrolledStudents'] = $this->report_lookup_model->r_count('enrollment_profile','isEnrolled',1);
		$data['count_notEnrolledStudents'] = $this->report_lookup_model->r_count('enrollment_profile','isEnrolled',0);
		$data['count_totalStudents'] = $this->report_lookup_model->r_count('enrollment_profile');
		
		$data['courses'] = $this->reports_model->list_courses();
		$this->load->view('query_enrolled_summary',$data);
	}
}


?>