<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function Save_book($data){
		$this->db->insert("book_table",$data);
	}
	public function AllBook(){
		$this->db->select('*');
		$this->db->from('book_table');
		$query=$this->db->get();
		$result=$query->result();
		return $result;
	}
	
	public function BookById($id){
		$this->db->select('*');
		$this->db->from('book_table');
		$this->db->where('book_id',$id);
		$query=$this->db->get();
		$result=$query->row();
		return $result;
	}
	
	public function UpdateBook($id,$data){
		$this->db->set('book_name',$data['bname']);
		$this->db->set('author',$data['aname']);
		$this->db->set('department',$data['dname']);
		$this->db->where('book_id',$id);
		$this->db->update("book_table");
	}
	public function DeleteBookById($id){
		$this->db->where('book_id',$id);
		$this->db->delete('book_table');
		
		
	}
	public function BookNameById($id){
		$this->db->select('book_name');
		$this->db->from('book_table');
		$this->db->where('book_id',$id);
		$query=$this->db->get();
		$result=$query->row();
		return $result;
	}
	}
