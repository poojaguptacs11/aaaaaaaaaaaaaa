<?php

class Form_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_form($data)
	{
		return $this->db->insert('form',$data);
	}
	public function view_form()
	{
	  $sql="select * from form";
	  return $this->db->query($sql)->result();
	}
}