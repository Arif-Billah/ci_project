<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
				public function index(){
					$this->home();
					//$this->load->view('home');
				}
	public function home(){
		
		//$this->load->view('home');
		 $data=array();
		$data['title']="library manegment system";
		$data['header']=$this->load->view('inc/header.php','',True);
		$data['sidebar']=$this->load->view('inc/sidebar.php','',True);
		$data['addservice']=$this->load->view('inc/addservice.php','',True);
		$data['footer']=$this->load->view('inc/footer.php','',True);
		
		
		$this->load->view('service',$data); 
	}
}

