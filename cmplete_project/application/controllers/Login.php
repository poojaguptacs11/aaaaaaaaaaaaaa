<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* develop by shubham Complete project
*/
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		// Load session library
		$this->load->library('session');

		// Load database
		$this->load->database();
	}
	public function index()
	{
		
		$this->load->view('front/login');	

	}
	public function dashboard()
	{
		
		$this->load->view('front/dashboard');	

	}
	
		public function userlogin()
		{

			
			$user_name=$this->input->post('username');
			$pass=sha1($this->input->post('password'));
			
			 $sql="select * from users where user_name='$user_name' AND user_password='$pass'";
			 $result=$this->db->query($sql)->result();

			if ($result != false) 
			{
				$session_data = array(
				'username' => $result[0]->user_name,
				'email' => $result[0]->user_email,
				'logined_in'=> true,
				);
	            $this->session->set_userdata($session_data);
	             	
				redirect(base_url().'login/dashboard','refresh');
			 }
			 else{

			 	redirect(base_url().'login','refresh');
			 }
		}
		public function logout()
		{
			$logout=session_destroy();
			if($logout)
			{
				redirect(base_url().'login','refresh');
			}
		}

	
}
