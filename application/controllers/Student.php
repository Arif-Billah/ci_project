<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
			$data=array();
			//$this->load->model('student_model');
			// $this->load->model('dep_model');
		}

	public function addstudent(){
		 
		$data['title'] = "Add new student";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		//$data['depdatas'] = $this->dep_model->readdepartment();
		$data['studentadd'] = $this->load->view('inc/studentadd.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		
		
		$this->load->view('addstudent',$data); 
	}
	
	public function addstudentform(){
		$data['name'] = $this->input->post('name');
		$data['dep']  = $this->input->post('depid');
		$data['roll'] = $this->input->post('roll');
		$data['reg']  = $this->input->post('reg');
		
		$name = $data['name'];
		$dep  = $data['dep'];
		$roll = $data['roll'];
		$reg  = $data['reg'];
		if(empty($name) && empty($dep) && empty($roll) && empty($reg)){
			$a="field must not be empty";
			echo $a;
			//redirect('student/addstudent');
		}else{
			//print_r($_POST);
			//return;
			$sdata=array();
			$this->student_model->save_student($data);
			redirect("student/studentlist");
			$sdata['msg']='successfully added';
			if(isset($sdata['msg'])){
				echo 'successfully added';
			}else{
				echo 'try again';
			}
		}
	}
	
	
	
}

