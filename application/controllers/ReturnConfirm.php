<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ReturnConfirm extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
			$data=array();
			$this->load->model('student_model');
			 $this->load->model('Department_model');
		}

	public function AddConfirm(){
		 
		$data['title'] = "Add new student";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		$data['depdatas'] = $this->Department_model->AllDepartment();
		$data['confirmAdd'] = $this->load->view('inc/confirmAdd.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		$this->load->view('confirmAdd',$data); 
	}
	
}