<?php
class Register_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Register($data)
	{
		return $this->db->insert('register',$data);
	}
	public function view_Register()
	{
	  $sql="select * from register";
	  return $this->db->query($sql)->result();
	}
	public function edit_data($id)
	{
		$sql="select * from Register where id='$id'";
		return $this->db->query($sql)->result();
	}
	public function view_data()
	{
		$sql="select * from Register";
		return $this->db->query($sql)->result();
	}
	public function update_data($value, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('Register',$value);
	}
	public function delete_data($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('Register');
	}
}
