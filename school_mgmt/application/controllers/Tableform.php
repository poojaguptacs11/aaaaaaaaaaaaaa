<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Tableform extends CI_Controller 
{
		public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	  $this->load->helper('url','file');
	  $this->load->model('Fullform_model');
	}

		public function index()
	{

		$query['userdata']=$this->Fullform_model->view_Fullform();
		//print_r($query); die();
		$this->load->view('newf/tableform',$query);
		
	}
		
}

?>