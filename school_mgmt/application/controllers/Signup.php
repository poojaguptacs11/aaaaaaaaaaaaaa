<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller 
{

	public function __construct()
	{
     parent::__construct();
     $this->load->database();
	  $this->load->helper('url','file');
	}
	public function index()
	{
		$this->load->view('newf/signup');
	}
}