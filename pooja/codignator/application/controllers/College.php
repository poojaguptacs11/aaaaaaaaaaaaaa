<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class College extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','file');
		$this->load->model('Student_model');
	}
	public function index()
	{
		
	  $this->load->view('college1');

	}
	public function teachers()
	{
		$this->load->view('teacher1');
	}
	public function employees()
	{
		$this->load->view('employees1');
		
	}
	public function students()
	{
		$this->load->view('students1');
	}
	public function pioun()
	{
		# code...
	}
	public function leadieedTeacher($value='')
	{
		# code...
	}
}