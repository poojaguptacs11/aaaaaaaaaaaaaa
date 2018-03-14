<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classtable extends CI_Controller 
{
		public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	  $this->load->helper('url','file');
	  $this->load->model('Section_model');
	}

		public function index()
	{

		$query['userdata']=$this->Section_model->view_data();
		//print_r($query); die()
		$this->load->view('Classtable',$query);
	}
		
}

?>