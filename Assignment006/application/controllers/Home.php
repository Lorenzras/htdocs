<?php

//RasLorenz-LaboratoryExercise001

class Home extends CI_Controller{
	
	public function index(){
		echo "Hello World";
	}
	
	public function about(){
		echo "This is my first CodeIgniter application";
	}
	
	public function Products(){
		echo "Our Special Pasta Menu";
	}
	
	public function About_Us(){
		echo "About the Pasta House";
	}
	
	public function Contact_Us(){
		echo "For comment and suggestions, please contact…";
	}
	
	public function FAQ(){
		echo "Frequently asked Questions";
	}
	
}

?>