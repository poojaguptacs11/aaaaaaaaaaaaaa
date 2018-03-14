<?php
class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function insert_signup($data)
	{
		return $this->db->insert('users',$data);
	}

	public function view_user()
	{
	$sql= "select * from Users";
	return $this->db->quary->quary($sql)->result();
   }
} 
?>