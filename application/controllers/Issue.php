<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Issue extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
			$data=array();
			$this->load->model('student_model');
			 $this->load->model('Department_model');
			 $this->load->model('Book_model');
			 $this->load->model('Issue_model');
			 $this->load->model('Author_model');
		}

	public function AddIssue(){
		 
		$data['title'] = "Issue Book";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		$data['depdatas'] = $this->Department_model->AllDepartment();
		$data['allBook'] = $this->Book_model->AllBook();
		$data['issueadd'] = $this->load->view('inc/issueadd.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		
		
		$this->load->view('issueadd',$data); 
	}
	
	public function AddIssueform(){
		$this->form_validation->set_rules('name','name','required'); 
		 
		$this->form_validation->set_rules('book','book','required');
		$this->form_validation->set_rules('reg','reg','required');
		$this->form_validation->set_rules('dept','dept','required');
		$this->form_validation->set_rules('return','return','required');
		if($this->form_validation->run()==false){
			/*$this->session->set_flashdata('msg', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>'.validation_errors().'</div>'); */
			//$this->load->view('front/index');
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('issueadd');
			//return redirect('student/addstudent');
			//print_r($_POST);
			//echo 'field must not empty';
			
		}else{
			//print_r($_POST);
			 $data['name'] = $this->input->post('name');
			$data['dep']  = $this->input->post('dept');
			$data['reg']  = $this->input->post('reg');
			$data['book']  = $this->input->post('book');
			$data['return_date']  = $this->input->post('return');
			$this->Issue_model->SaveIssue($data);
			$this->session->set_flashdata('msg',"Successfully Added"); 
			//$this->load->view('addstudent');
			redirect('issue/AddIssue');
		}
			
	}
	
		 public function Issuelist(){
		$data['title'] = "Issue list";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		$data['AllIssueData'] = $this->Issue_model->AllIssueData();
		$data['issueList'] = $this->load->view('inc/issueList.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		$this->load->view('issueList',$data);
		
   }
   
   
	public function IssueDetails($id){
		
		$data['title'] = "student details";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		//$data['alldept'] = $this->Department_model->AllDepartment();
		//$data['studentDataById']=$this->student_model->GetstudentByid($id);
		$data['studentDataByReg']=$this->Issue_model->GetstudentByreg($id);
		$data['issueDetails'] = $this->load->view('inc/issueDetails.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		
		
		$this->load->view('issueDetails',$data); 
		
	}
        public function DeleteIssueById($id){
		$this->Issue_model->DeleteIssueById($id);
		redirect('issue/Issuelist');
		
		}
		
		public function ViewBook($id){
		$data['title'] = "Book details";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		$data['bookDataById']=$this->Issue_model->GetBookByid($id);
		$data['viewBook'] = $this->load->view('inc/viewBook.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		
		
		$this->load->view('viewBook',$data); 
			
		}
		
	
	
	
}