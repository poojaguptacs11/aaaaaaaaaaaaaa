<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctable extends CI_Controller 
{
		public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	  $this->load->helper('url','file');
	  $this->load->model('classes_model');
	}

		public function index()
	{

		$query['userdata']=$this->classes_model->view_Classes();
		//print_r($query); die()
		$this->load->view('Ctable',$query);
	}
		
}

?>