<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_student($data)
	{
		return $this->db->insert('student',$data);
	}
	public function view_student()
	{
	  $sql="select * from student";
	  return $this->db->query($sql)->result();
	}
}