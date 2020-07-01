<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ReturnConfirm extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
			$data=array();
			$this->load->model('student_model');
			 $this->load->model('Department_model');
			 $this->load->model('Issue_model');
			 if(!$this->session->userdata('user_login')){
			redirect('user');
		}
		}
		

	public function AddConfirm($id){
		 
		$data['title'] = "Add new student";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		$data['GetSingleId'] = $this->Issue_model->GetSingleId($id);
		$data['confirmAdd'] = $this->load->view('inc/confirmAdd.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		$this->load->view('confirmAdd',$data); 
	}
	public function AddReturnConfirmform($id){
		$this->form_validation->set_rules('date','date','required');
		 
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('confirmAdd');
			//print_r($_POST);
			
		}else{
			//print_r($_POST);
			//return;
			 $data['return_back'] = $this->input->post('date');
			//$this->Issue_model->SaveIssue($data);
			$this->Issue_model->SetReturnDate($data,$id);
			$this->session->set_flashdata('msg',"Successfully Added"); 
			//$this->load->view('addstudent');
			redirect('issue/Issuelist');
		}
			
	}
		
	}
	
