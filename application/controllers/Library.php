<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {
	public function __construct(){
		parent::__construct();
		 if(!$this->session->userdata('user_login')){
			redirect('user');
		} 
	}
	public function Index(){
		$this->home();
	}
				
	public function home(){
		
		
		 $data=array();
		$data['title']="library manegment system";
		$data['header']=$this->load->view('inc/header.php','',True);
		$data['sidebar']=$this->load->view('inc/sidebar.php','',True);
		$data['content']=$this->load->view('inc/content.php','',True);
		$data['footer']=$this->load->view('inc/footer.php','',True);
		
		
		$this->load->view('home',$data); 
	}
}

