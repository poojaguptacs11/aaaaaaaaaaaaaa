<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fullform extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','file');
		$this->load->model('Fullform_model');
		 $this->load->model('Section_model');
	   $this->load->model('Classes_model');

	}
	public function index()
	{
		$data['liste']=$this->Classes_model->view_Classes();
		$data['list']=$this->Section_model->view_Section();

		$this->load->view('newf/fullform',$data);
	}

 public function save()
 {

 	$data=array(
 		'student_name'=>$this->input->post('student_name'),
        'student_id'=>$this->input->post('student_id'),
        'email_id'=>$this->input->post('email_id'),
        'about_your_detail'=>$this->input->post('about_your_detail'),
        'class'=>$this->input->post('class'),
        'section'=>$this->input->post('section'),
        'gender'=>$this->input->post('gender'),
        'category'=>$this->input->post('category'),
        'branch'=>$this->input->post('branch'),
        'all_subject'=>$this->input->post('all_subject'),
    );
        $this->Fullform_model->insert_Fullform($data);
      $this->load->view('newf/fullform');

  }
}  