<?php defined('BASEPATH') OR exit('No direct script access allowed');

class student_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	
	}
	public function save_student($data){
		
		$this->db->insert("student_table",$data);
	}
	public function ListAllstudentData(){
		$this->db->select('*');
		$this->db->from('student_table');
		//$this->db->order_by('sid','desc')
		$qrequest=$this->db->get();
		$result=$qrequest->result();
		//print_r($result);
		return $result;
		
	}
	public function GetstudentByid($id){
		$this->db->select('*');
		$this->db->from("student_table");
		$this->db->where('sid',$id);
		$query=$this->db->get();
		$result=$query->row();
		//print_r($result);
		//return;
		return $result;
		
	}
	public function UpdateStudentById($id,$data){
		$this->db->set('student_name',$data['name']);
		$this->db->set('student_dep',$data['dep']);
		$this->db->set('student_roll',$data['roll']);
		$this->db->set('student_reg',$data['reg']);
		$this->db->set('student_email',$data['email']);
		$this->db->where('sid',$id);
		$this->db->update("student_table");
	}
	public function DeleteStudentById($id){
		$this->db->where('sid',$id);
		$this->db->delete('student_table');
		
		
	}
	public function Test($em,$id){
		$this->db->select('student_email');
		$this->db->from("student_table");
		$this->db->where('student_email',$em);
		$this->db->where('sid!=',$id);
		$query=$this->db->get();
		$result=$query->num_rows();
		
		//$result=$this->db->("SELECT `student_email` FROM `student_table` WHERE student_email = $em AND sid!=$id")->row();
		return $result;
	}
	
}