<?php
class Reg_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Reg($data)
	{
		return $this->db->insert('Reg',$data);
	}
	public function view_Reg()
	{
	  $sql="select * from Reg";
	  return $this->db->query($sql)->result();
	}
}