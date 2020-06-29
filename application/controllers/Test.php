<?php
class Test extends CI_Controller {
			public function __construct(){
			parent::__construct();
			
			 $this->load->helper('url');
		}
		public function index(){
			
			
			$this->load->view('test');
			
		}
	public function home(){
		
		echo "Flash welcome message: ". $this->session->flashdata('flash_welcome');
      //echo $_SESSION["msg"];
        //print_r($this->session->flashdata());
		 
		//$this->load->view('test');
		
		
		
	}
	public function demo(){
		//session_start();
		//$_SESSION["msg"] = "ok";
		
		//$this->sesssion['msg']='ok';
		$this->session->set_flashdata('flash_welcome', 'Hey, welcome to the site!');
		//$this->load->view('test');
		//redirect('test/home');
		//$this->session->set_flashdata('msg','success');
		//var_dump($_SESSION);
		redirect('test');
        //exit;
		//$this->session->keep_flashdata('msg','hello');
		//$this->load->view('test'); 
		 //redirect('test/home');
		//return redirect('test','refresh');
	}
}

