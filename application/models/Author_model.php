<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Author_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function Save_author($data){
		$this->db->insert("author_table",$data);
	}
	
	public function AllAuthor(){
		$this->db->select('*');
		$this->db->from('author_table');
		$query=$this->db->get();
		$result=$query->result();
		return $result;
	}
	
	public function AuthorById($id){
		$this->db->select('*');
		$this->db->from('author_table');
		$this->db->where('id',$id);
		$query=$this->db->get();
		$result=$query->row();
		return $result;
	}
	
	public function UpdateAuthor($id,$data){
		$this->db->set('author_name',$data['name']);
		$this->db->where('id',$id);
		$this->db->update("author_table");
	}
	public function DeleteAuthorById($id){
		$this->db->where('id',$id);
		$this->db->delete('author_table');
		
		
	}
}