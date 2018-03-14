<?php
class School_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_School($data)
	{
		//print_r($data);
		return $this->db->insert('school',$data);
	}
	public function view_School()
	{
	  $sql="select * from School";
	  return $this->db->query($sql)->result();
	}
	public function edit_data($id)
	{
		$sql="select * from School where id='$id'";
		return $this->db->query($sql)->result();
	}
	public function view_data()
	{
		$sql="select * from School";
		return $this->db->query($sql)->result();
	}
	public function update3_data($value, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('School',$value);
	}
	public function delete_data($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('School');
	}
}
