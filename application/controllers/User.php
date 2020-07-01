<?php defined('BASEPATH') OR exit('No direct script access allowed');

     class User extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
		    $this->load->library('form_validation');
			$data=array();
			$this->load->model('User_model');
			
		}
		public function index(){
			$this->Adduser();
		}
		

	
        public function Adduser(){
		 
		// $data['title'] = "Issue Book";
		$data['header'] = $this->load->view('inc/header.php','',True);
		//$data['sidebar'] = $this->load->view('inc/sidebar.php','',True);
		//$data['useradd'] = $this->load->view('inc/useradd.php',True);
		$data['footer'] = $this->load->view('inc/footer.php','',True); 
		
		
		$this->load->view('useradd',$data); 
	}
	public function AddUserForm(){
		$this->form_validation->set_rules('name','name','required');
		 $this->form_validation->set_rules('pass','pass','required');
		
		if($this->form_validation->run()==false){
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('useradd');
		}else{
			$data['userName']=$this->input->post('name');
			$data['userId']=$this->input->post('pass');
			//print_r($data);
			//return;
			$userCheck=$this->User_model->LoginCheck($data);
			//print_r($userCheck);
				//return;
			if($userCheck){
				$sdata=array();
				$sdata['userId']=$userCheck->id;
				$sdata['user_login']=true;
				//print_r($sdata);
				//return;
				$this->session->set_userdata($sdata);
				redirect('library');
				
			}else{
				redirect('user/Adduser');
			}
			
			
		}

	}
	 }
	
	
	
	 
	 