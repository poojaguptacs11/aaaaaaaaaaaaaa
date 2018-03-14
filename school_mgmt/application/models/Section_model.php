<?php
class Section_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Section($data)
	{
		//print_r($data);
		return $this->db->insert('Section',$data);
	}
	public function view_Section()
	{
	  $sql="select * from Section";
	  return $this->db->query($sql)->result();
	}
	public function edit_data($id)
	{
		$sql="SELECT * FROM `section` WHERE `class`='$id'";
		 return $q=$this->db->query($sql)->result();
		 // print_r($q);
		 // die();
		
	}
	public function view_data()
	{
		$sql="select *, section.id,section.section,class_name from section left join classes on section.class=classes.id";
		 return $this->db->query($sql)->result();
		 //print_r($data);die();
	}
	public function update_data($value, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('Section',$value);
	}
	public function delete_data($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('Section',$id);
	}
}
?>