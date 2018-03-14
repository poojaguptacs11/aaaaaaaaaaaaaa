<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employes_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function insert_employes($data)
	{
		return $this->db->insert('employes',$data);
	}
	public function view_employes()
	{
	  $sql="select * from employes";
	  return $this->db->query($sql)->result();
	}
}