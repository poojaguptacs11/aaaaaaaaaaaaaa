<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	public function view_User()
	{
		$sql = "select * from Users";
		return $this->db->quary($sql)->result();
	}
	public function login($value)
	{
		$user=$value["user_name"];
		 $pass=$value['password'];
		$sql="select * from users where user_name='$user' OR user_email='$user' AND user_password='$pass'";
		return $q=$this->db->query($sql)->result();
		
	}
}

?>