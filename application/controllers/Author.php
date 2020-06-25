<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
			$data=array();
			//$this->load->model('student_model');
			 //$this->load->model('Department_model');
		}

	public function AddAuthor(){
		 
		$data['title'] = "Add new student";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		//$data['depdatas'] = $this->Department_model->AllDepartment();
		$data['addAuthor'] = $this->load->view('inc/addAuthor.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		
		
		$this->load->view('addAuthor',$data); 
	}
}
 