<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	
	}
	public function LoginCheck($data){
		
		$this->db->select("*");
		$this->db->from("user_table");
		$this->db->where("user_name",$data['userName']);
		$this->db->where("password",md5($data['userId']));
		$result=$this->db->get();
		$check=$result->num_rows();
		if($check===1){
			$value=$result->row();
			return $value;
			
		}
	}
}