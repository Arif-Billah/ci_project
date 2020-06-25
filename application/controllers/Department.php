<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Department extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Department_model');
		$data=array();
		
	}
	public function Index(){
		$this->Home();
	}
	public function Home(){
		$data['header']=$this->load->view('inc/header','',true);
		$data['sidebar']=$this->load->view('inc/sidebar','',true);
		$data['addDepartment']=$this->load->view('inc/addDepartment','',true);
		$data['footer']=$this->load->view('inc/footer','',true);
		$this->load->view('addDepartment',$data);
	}
	public function AddDepartment(){
		$this->form_validation->set_rules('name','name','required');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('msg','Field must not be empty');
			$this->load->view('addDepartment');
		}else{
			$data['dep_name']=$this->input->post('name');
			$query=$this->Department_model->Save_department($data);
			
				$this->session->set_flashdata('msg','Successfully inserted');
				//$this->load->view('addDepartment');
			redirect ('department');
		}
		
	}
	public function DepartmentList(){
		$data['header']=$this->load->view('inc/header','',true);
		$data['sidebar']=$this->load->view('inc/sidebar','',true);
		$data['depAllData']=$this->Department_model->AllDepartment();
		$data['departmentList']=$this->load->view('inc/departmentList',$data,true);
		$data['footer']=$this->load->view('inc/footer','',true);
		$this->load->view('departmentList',$data);
	}
	public function DepartmentDetails($id){
		$data['header']=$this->load->view('inc/header','',true);
		$data['sidebar']=$this->load->view('inc/sidebar','',true);
		$data['depAllData']=$this->Department_model->AllDepartment();
		$data['departmentDetailsById']=$this->load->Department_model->DepartmentById($id);
		
		$data['departmentDetails']=$this->load->view('inc/departmentDetails',$data,true);
		$data['footer']=$this->load->view('inc/footer','',true);
		$this->load->view('departmentDetails',$data);
	}
	public function DepartmetUpdate($id){
		$this->form_validation->set_rules('dept','dept','required');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('addDepartment');
		}else{
			$data['name']=$this->input->post('dept');
			$query=$this->Department_model->UpdateDepartment($id,$data);
			
				$this->session->set_flashdata('msg','Successfully inserted');
				//$this->load->view('addDepartment');
			redirect ('department');
		}
	}
}