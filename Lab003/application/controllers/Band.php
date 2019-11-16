<?php
class Band extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('songs_model');
	}
	
	public function index(){
		$data["title"] = 'Rage Against the Machine Songs';
		$data["songs"] = $this->songs_model->get_songs();
		
		$this->load->view('pages/songs',$data);
	}
	
	public function view($slug = NULL){
		$data['song'] = $this->songs_model->get_songs($slug);
		
		if(empty($data['song'])){
			show_404();
		}
		
		$data['title'] = $data['song']['song_title'];
		$this->load->view('pages/song', $data);
	}
}

?>