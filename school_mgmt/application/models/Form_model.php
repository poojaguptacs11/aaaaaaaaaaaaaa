<?php
class Form_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Form($data)
	{
		//print_r($data);
		return $this->db->insert('form',$data);
	}
	public function view_Form()
	{
	  $sql="select * from Form";
	  return $this->db->query($sql)->result();
	}
}