<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	 public function index()
	 {
	 	$this->load->view('front/signup');
	 }

	 public function signup_save()
	 {
	 	//$this->load->model('User_model');
	  $data = array(
	'user_name'=>$this->input->post('name'),
	'user_password'=>sha1($this->input->post('password')),
	'user_email'=>$this->input->post('email'),
	'user_add'=>$this->input->post('address'),
	'mob_no'=>$this->input->post('mob_no'),
		);
	 // print_r($data); die();
	  $this->User_model->insert_signup($data);
	  redirect('signup','refresh');

	}

}
