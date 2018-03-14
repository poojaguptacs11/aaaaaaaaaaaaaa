<?php

class Full_validationform_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_full_validationform($data)
	{
		return $this->db->insert('full_validationform',$data);
	}
	public function view_full_validationform()
	{
	  $sql="select * from full_validationform";
	  return $this->db->query($sql)->result();
	}
}