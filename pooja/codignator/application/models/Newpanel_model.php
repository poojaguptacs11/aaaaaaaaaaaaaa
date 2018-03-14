<?php

class Newpanel_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Newpanel($data)
	{
		return $this->db->insert('Newpanel',$data);
	}
	public function view_Newpanel()
	{
	  $sql="select * from Newpanel";
	  return $this->db->query($sql)->result();
	}
	public function edit_data($id)
	{
		$sql="select * from Newpanel where id='$id'";
		return $this->db->query($sql)->result();
	}
	public function view_data()
	{
		$sql="select * from Newpanel";
		return $this->db->query($sql)->result();
	}
	public function update_data($value, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('Newpanel',$value);
	}
	public function delete_data($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('Newpanel');
	}
}