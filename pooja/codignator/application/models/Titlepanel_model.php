<?php
class Titlepanel_model extends CI_Model
{  
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_Titlepanel($data)
	{
		return $this->db->insert('Titlepanel',$data);
	}
	public function view_Titlepanel()
	{
	  $sql="select * from Titlepanel";
	  return $this->db->query($sql)->result();
	}
	public function listing()
	{
	  $sql="select * from Titlepanel";
	  return $this->db->query($sql)->result();
	}
}