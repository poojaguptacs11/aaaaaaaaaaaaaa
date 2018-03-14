<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		//$this->load->model('User_model');
	}

	 public function index()
	 {
	 	$this->load->view('front/signup');
	 }
}

/*
	 public function save()
	 {

	  $data = array(

	'user_name'=>$this->input->post('name'),
	'user_password'=>$this->input->post('password'),
	'user_email'=>$this->input->post('email'),
	'user-add'=>$this->input->post('address'),
	'mob_no'=>$this->input->post('mob_no'),
		);
	  $this->User_model->insert_signup($data);
	  redirect('front/signup','refresh');

	}

}*/
