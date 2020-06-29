<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function Save_department($data){
		$this->db->insert("department_table",$data);
	}
	public function AllDepartment(){
		$this->db->select('*');
		$this->db->from('department_table');
		$query=$this->db->get();
		$result=$query->result();
		return $result;
	}
	public function DepartmentById($id){
		$this->db->select('*');
		$this->db->from('department_table');
		$this->db->where('dep_id',$id);
		$query=$this->db->get();
		$result=$query->row();
		return $result;
	}
	
	
	public function DeleteDepartmentById($id){
		$this->db->where('dep_id',$id);
		$this->db->delete('department_table');
		
		
	}
	
	
}