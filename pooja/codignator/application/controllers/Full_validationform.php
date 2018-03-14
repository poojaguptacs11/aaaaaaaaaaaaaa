<?php
class Full_validationform extends CI_Controller
{
   public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','file');
		$this->load->model('Full_validationform_model');
	}
	public function index()
	{
		$this->load->view('design/full_validation');
	}
	public function insert()
	{
		$this->load->view('insert4');
	}
	public function save()
	{
		$data=array(
		'firstname'=>$this->input->post('firstname'),
		'lastname'=>$this->input->post('lastname'),
		'username'=>$this->input->post('username'),
		'password'=>$this->input->post('password'),
		'address'=>$this->input->post('address'),
	    'pincode'=>$this->input->post('pincode'),
	    'email_id'=>$this->input->post('email_id'),
	    'date'=>$this->input->post('date'),
	    'gender'=>$this->input->post('gender'),
	    'teacher'=>$this->input->post('teacher'),
	    'subject'=>$this->input->post('subject'),
	    'checkbox'=>$this->input->post('checkbox'), 
	    'select'=>$this->input->post('select'), 
	  );
		//print_r($data); die();
		$this->Full_validationform_model->insert_full_validationform($data);
		$this->load->view('design/Full_validation');
	}
	public function update()
	{
		$this->load->view('update4');
	}
	public function delete()
	{
		$this->load->view('delete4');
	}
	public function view()
	{
		$this->load->view('view4');

		
	}
	public function edit()
	{
		$this->load->view('edit4');
	}
}