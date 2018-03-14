<?php
class Form extends CI_Controller
{
   public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','file');
		$this->load->model('Form_model');
	}
	public function index()
	{
		$this->load->view('design/form');
	}
	public function insert()
	{
		$this->load->view('insert5');
	}
	public function save()
	{
		
		$data=array(
		'firstname'=>$this->input->post('firstname'),
		'lastname'=>$this->input->post('lastname'),
		'password'=>$this->input->post('password'),
		'address'=>$this->input->post('address'),
		'gender'=>$this->input->post('gender'),
		);
		$this->Form_model->insert_form($data);
		$this->load->view('design/form');
	}
	public function update()
	{
		$this->load->view('update5');
	}
	public function delete()
	{
		$this->load->view('delete5');
	}
	public function view()
	{
		$this->load->view('view5');
	}
	public function edit()
	{
		$this->load->view('edit5');
	}
}