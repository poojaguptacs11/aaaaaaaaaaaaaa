<?php
class Fullform_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Fullform($data)
	{
		//print_r($data);
		return $this->db->insert('fullform',$data);
	}
	public function view_Fullform()
	{
	  $sql="select * from Fullform";
	  return $this->db->query($sql)->result();
	}
	
	
}