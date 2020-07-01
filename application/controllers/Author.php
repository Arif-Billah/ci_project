<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
			$data=array();
			$this->load->model('Author_model');
			 //$this->load->model('Department_model');
			 if(!$this->session->userdata('user_login')){
			redirect('user');
		}
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
	
	public function AddAuthorform(){
		$this->form_validation->set_rules('name','name','required');
		if($this->form_validation->run()==false){
			/*$this->session->set_flashdata('msg', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>'.validation_errors().'</div>'); */
			//$this->load->view('front/index');
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('addsAuthor');
			//return redirect('student/addstudent');
			//print_r($_POST);
			//echo 'field must not empty';
			
		}else{
			//print_r($_POST);
			 $data['author_name'] = $this->input->post('name');
			$this->Author_model->Save_author($data);
			$this->session->set_flashdata('msg',"Successfully Added"); 
			//$this->load->view('addAuthor');
			redirect('author/AddAuthor');
		}
			
	}
	public function AuthorList(){
		$data['header']=$this->load->view('inc/header','',true);
		$data['sidebar']=$this->load->view('inc/sidebar','',true);
		$data['authorAllData']=$this->Author_model->AllAuthor();
		$data['authorList']=$this->load->view('inc/authorList',$data,true);
		$data['footer']=$this->load->view('inc/footer','',true);
		$this->load->view('authorList',$data);
	}
	
	public function AuthorDetails($id){
		$data['header']=$this->load->view('inc/header','',true);
		$data['sidebar']=$this->load->view('inc/sidebar','',true);
		$data['authorAllData']=$this->Author_model->AllAuthor();
		$data['authorDetailsById']=$this->load->Author_model->AuthorById($id);
		
		$data['authorDetails']=$this->load->view('inc/authorDetails',$data,true);
		$data['footer']=$this->load->view('inc/footer','',true);
		$this->load->view('authorDetails',$data);
	}
	
	public function AuthorUpdate($id){
		$this->form_validation->set_rules('aname','aname','required');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('addAuthor');
		}else{
			$data['name']=$this->input->post('aname');
			$query=$this->Author_model->UpdateAuthor($id,$data);
			
				$this->session->set_flashdata('msg','Successfully inserted');
				//$this->load->view('addDepartment');
			redirect ('author/AuthorList');
		}
	}
	
	public function DeleteAuthorById($id){
		$this->Author_model->DeleteAuthorById($id);
		redirect('author/authorList');
		
		}
	

}