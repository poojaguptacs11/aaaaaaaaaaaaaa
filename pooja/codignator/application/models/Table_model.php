<?php
class Table_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Table($data)
	{
		return $this->db->insert('Table',$data);
	}
	public function view_Table()
	{
	  $sql="select * from studentform";
	  return $this->db->query($sql)->result();
	}
    public function edit_data($id)
	{
		$sql="select * from Studentform where id='$id'";
		return $this->db->query($sql)->result();
	}
	public function view_data()
	{
		$sql="select * from Studentform";
		return $this->db->query($sql)->result();
	}
	public function update_data($value, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('Studentform',$value);
	}
	public function delete_data($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('Studentform');
	}
}
