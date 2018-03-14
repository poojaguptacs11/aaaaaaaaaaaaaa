<?php

/**
* developed by pooja.
*/
   class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','file');
	}
	public function index()
	{
		$this->load->view('admin/pages/allpage/login');
	}
}
