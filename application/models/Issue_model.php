<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Issue_model extends CI_Model{
	public function __construct(){
		parent:: __construct();
	
	}
	public function SaveIssue($data){
		
		$this->db->insert("issue_table",$data);
	}
	public function AllIssueData(){
		$this->db->select('*');
		$this->db->from('issue_table');
		//$this->db->order_by('sid','desc')
		$qrequest=$this->db->get();
		$result=$qrequest->result();
		//print_r($result);
		return $result;
		
	}
	public function GetstudentByreg($id){
		$this->db->select('*');
		$this->db->from('student_table');
		$this->db->where('student_reg',$id);
		$query=$this->db->get();
		$result=$query->row();
		return $result;
	}
	
	public function DeleteIssueById($id){
		$this->db->where('issue_id',$id);
		$this->db->delete('issue_table');	
	}
	public function GetBookByid($id){
		$this->db->select('*');
		$this->db->from('book_table');
		$this->db->where('book_id',$id);
		$query=$this->db->get();
		$result=$query->row();
		return $result;
	}
}