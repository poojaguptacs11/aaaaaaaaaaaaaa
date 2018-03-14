<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Studentdetail extends CI_Controller 
{
		public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	  $this->load->helper('url','file');
	  $this->load->model('Form_model');
	}

		public function index()
	{

		$query['userdata']=$this->Form_model->view_Form();
		//print_r($query); die();
		$this->load->view('studentdetail',$query);
		
	}
		
}

?>