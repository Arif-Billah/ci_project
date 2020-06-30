<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
			$data=array();
			$this->load->model('student_model');
			 $this->load->model('Department_model');
		}

	public function Addstudent(){
		 
		$data['title'] = "Add new student";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		$data['depdatas'] = $this->Department_model->AllDepartment();
		$data['studentadd'] = $this->load->view('inc/studentadd.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		$this->load->view('addstudent',$data); 
	}
	
	public function Addstudentform(){
		$this->form_validation->set_rules('name','name','required');
		 $this->form_validation->set_rules('email','email','required|valid_email|is_unique[student_table.student_email]'); 
		$this->form_validation->set_rules('reg','reg','required');
		$this->form_validation->set_rules('dept','dept','required');
		$this->form_validation->set_rules('phone','phone','required');
		if($this->form_validation->run()==false){
			/*$this->session->set_flashdata('msg', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>'.validation_errors().'</div>'); */
			//$this->load->view('front/index');
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('addstudent');
			//return redirect('student/addstudent');
			//print_r($_POST);
			//echo 'field must not empty';
			
		}else{
			//print_r($_POST);
			 $data['student_name'] = $this->input->post('name');
			$data['student_dep']  = $this->input->post('dept');
			$data['student_roll'] = $this->input->post('roll');
			$data['student_reg']  = $this->input->post('reg');
			$data['phone']  = $this->input->post('phone');
			$data['student_email']  = $this->input->post('email');
			$this->student_model->save_student($data);
			$this->session->set_flashdata('msg',"Successfully Added"); 
			//$this->load->view('addstudent');
			redirect('student/addstudent');
		}
			
	}
	
	 public function Studentlist(){
		$data['title'] = "student list";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		$data['alldept'] = $this->Department_model->AllDepartment();
		$data['studentdata']=$this->student_model->ListAllstudentData();
		$data['studentlist'] = $this->load->view('inc/studentlist.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		$this->load->view('studentlist',$data);
		
}

	public function StudentDetails($id){
		
		$data['title'] = "Updata student";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		$data['alldept'] = $this->Department_model->AllDepartment();
		$data['studentDataById']=$this->student_model->GetstudentByid($id);
	
		$data['studentDetails'] = $this->load->view('inc/studentDetails.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		
		
		$this->load->view('StudentDetails',$data); 
		
	}
		public function StudentUpdate($id){
		$this->form_validation->set_rules('name','name','required');
		//$this->form_validation->set_rules('email','email','required|valid_email'); 
		$this->form_validation->set_rules('roll','roll','required');
		$this->form_validation->set_rules('reg','reg','required');
		$this->form_validation->set_rules('dept','dept','required');
		$this->form_validation->set_rules('email','email',"required|valid_email|callback_check_database[$id]",array('check_database' => 'wrong')); 
		
		//$this->form_validation->set_rules('email','email','required|valid_email|is_unique[student_table.student_email]|callback_check_database[$id]',array('check_database' => 'text dont match email'));  
		
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('addstudent');
		}else{
			$data['name'] = $this->input->post('name');
			$data['dep']  = $this->input->post('dept');
			$data['roll'] = $this->input->post('roll');
			$data['reg']  = $this->input->post('reg');
			$data['email']  =$this->input->post('email');
			
			$this->student_model->UpdateStudentById($id,$data);
			redirect('student/Studentlist/');
			
		}
			
	}
		public function check_database($email,$id){
		$result=$this->student_model->Test($email,$id);
		//print_r($id);
		if($result==0){
			return TRUE;
		}else{
			return false;
		}
		
		
	}
			
		public function DeleteStudentById($id){
		$this->student_model->DeleteStudentById($id);
		redirect('student/studentlist');
		
		}
		
		}
	
 

