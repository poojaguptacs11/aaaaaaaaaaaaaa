<?php
class Classes_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_classes($data)
	{
		//print_r($data);
		return $this->db->insert('classes',$data);
	}
	public function view_Classes()
	{
	  $sql="select * from classes";
	  return $this->db->query($sql)->result();
	}

	public function edit_data($id)
	{
		$sql="select * from Classes where id='$id'";
		return $this->db->query($sql)->result();
	}
	public function view_data()
	{
		$sql="select * from Classes";
		return $this->db->query($sql)->result();
	}
	public function update2_data($value, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('Classes',$value);
	}
	public function delete_data($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('Classes');
	}
}
