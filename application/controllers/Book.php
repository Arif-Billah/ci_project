<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
			$data=array();
			//$this->load->model('student_model');
			 $this->load->model('Department_model');
			 $this->load->model('Author_model');
			 $this->load->model('Book_model');
			 if(!$this->session->userdata('user_login')){
			redirect('user');
		}
		}

	public function AddBook(){
		 
		$data['title'] = "Add new student";
		$data['header'] = $this->load->view('inc/header.php',$data,True);
		$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		$data['authorData'] = $this->Author_model->AllAuthor();
		$data['depdatas'] = $this->Department_model->AllDepartment();
		$data['addBook'] = $this->load->view('inc/addBook.php',$data,True);
		$data['footer'] = $this->load->view('inc/footer.php','',True);
		
		
		$this->load->view('addBook',$data); 
	}
	
	
	public function AddBookform(){
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('stk','stk','required');
 		 
		$this->form_validation->set_rules('dept','dept','required');
		$this->form_validation->set_rules('aname','aname','required');
		if($this->form_validation->run()==false){
			/*$this->session->set_flashdata('msg', '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&times;</a>'.validation_errors().'</div>'); */
			//$this->load->view('front/index');
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('AddBook');
			//return redirect('student/addstudent');
			//print_r($_POST);
			//echo 'field must not empty';
			
		}else{
			//print_r($_POST);
			 $data['book_name'] = $this->input->post('name');
			 $data['stock'] = $this->input->post('stk');
			$data['department']  = $this->input->post('dept');
			$data['author']  = $this->input->post('aname');
		
			$this->Book_model->Save_book($data);
			$this->session->set_flashdata('msg',"Successfully Added"); 
			//$this->load->view('addstudent');
			redirect('book/AddBook');
		}
			
	}
	
	public function BookList(){
		$data['header']=$this->load->view('inc/header','',true);
		$data['sidebar']=$this->load->view('inc/sidebar','',true);
		$data['bookAllData']=$this->Book_model->AllBook();
		$data['bookList']=$this->load->view('inc/bookList',$data,true);
		$data['footer']=$this->load->view('inc/footer','',true);
		$this->load->view('bookList',$data);
	}
	
	public function BookDetails($id){
		$data['header']=$this->load->view('inc/header','',true);
		$data['sidebar']=$this->load->view('inc/sidebar','',true);
		$data['bookDetailsById']=$this->Book_model->BookById($id);
		$data['authorAllData']=$this->Author_model->AllAuthor();
		$data['depAllData']=$this->Department_model->AllDepartment();
		
		$data['bookDetails']=$this->load->view('inc/bookDetails',$data,true);
		$data['footer']=$this->load->view('inc/footer','',true);
		$this->load->view('bookDetails',$data);
	}
	
		public function BookUpdate($id){
		$this->form_validation->set_rules('bname','bname','required');
		$this->form_validation->set_rules('aname','aname','required');
		$this->form_validation->set_rules('dname','dname','required');
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('addAuthor');
		}else{
			$data['bname']=$this->input->post('bname');
			$data['aname']=$this->input->post('aname');
			$data['dname']=$this->input->post('dname');
			$query=$this->Book_model->UpdateBook($id,$data);
			
				$this->session->set_flashdata('msg','Successfully inserted');
				//$this->load->view('addDepartment');
			redirect ('book/BookList');
		}
	}
	
	public function DeleteBookById($id){
		$this->Book_model->DeleteBookById($id);
		redirect('book/BookList');
		
		}
	
	
	
		
		}
	
 

