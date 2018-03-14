<?php
class Titlename_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Titlename($data)
	{
		return $this->db->insert('Titlename',$data);
	}
	public function view_Titlename()
	{
	  $sql="select * from Titlename";
	  return $this->db->query($sql)->result();
	}
}