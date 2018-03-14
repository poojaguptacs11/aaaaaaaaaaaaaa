<?php
class Reg extends CI_Controller
{
	public function __construct()
	{
      parent::__construct();
      $this->load->database();
      $this->load->helper('url','file');
      $this->load->model('Reg_model');
	}
	public function index()
	{
		$this->load->view('design/reg');
	}
	public function inset()
	{
		$this->load->view('insert');
	}
	public function save()
	{
		$data=array(
	    'username'=>$this->input->post('username'),
	     'password'=>$this->input->post('password'),
	    'email_id'=>$this->input->post('email_id'),
	   'address'=>$this->input->post('address'),
	    'date'=>$this->input->post('date'),
	    'gender'=>$this->input->post('gender'),
	    'select'=>$this->input->post('select'),
	);
		
		$this->Reg_model->insert_Reg($data);
		$this->load->view('design/Reg');
	}
	public function update()
	{
		$this->load->view('update');
	}
	public function delete()
	{
		$this->load->view('delete');
	}
	public function view()
	{
		$this->load->view('view');
	}
}