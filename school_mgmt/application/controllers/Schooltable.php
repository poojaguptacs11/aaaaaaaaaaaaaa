<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schooltable extends CI_Controller 
{
		public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	  $this->load->helper('url','file');
	  $this->load->model('School_model');
	}

		public function index()
	{

		$query['userdata']=$this->School_model->view_School();
		//print_r($query); die()
		$this->load->view('schooltable',$query);
	}
		
}

?>