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
		$data = array(
			'user_name'=>$this->input->post('fullname'),
			'user_password'=>$this->input->post('password'),
			'e_mail'=>$this->input->post('email'),
			'address'=>$this->input->post('address'),
			'mob_no'=>$this->input->post('mobile_no'),
		);
		$this->User_model->insert_signup($data);
		$this->load->view('front/signup');
	}
}
