<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','file');
		$this->load->model('Teacher_model');
	}
		public function index()
		{
			$this->load->view('teacher');
		}
		public function save()
		{

		$data=array(
		'teacher_name'=>$this->input->post('teacher_name'),
	   );
			;
		 	$this->Teacher_model->insert_Teacher($data);
		 	redirect(base_url().'teacher');
	    }
}