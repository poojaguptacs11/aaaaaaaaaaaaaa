<?php
class Teacher_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Teacher($data)
	{
		return $this->db->insert('Teacher',$data);
	}
	public function view_Teacher()
	{
	  $sql="select * from Teacher";
	   return $que=$this->db->query($sql)->result();
	}
	
}