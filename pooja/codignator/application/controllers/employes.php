<?php
class Employes extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','file');
		$this->load->model('Employes_model');
	}
	public function index()
	{
		$this->load->view('employes3');
	}
	public function insert()
	{
		$this->load->view('insert3');
	}
	public function save()
	{
		$data=array(  
			'name' => $this->input->post('name'), 
			'last' =>$this->input->post('last'),
			 'address'=>$this->input->post('address'), 
			 'city'=>$this->input->post('city'),
		     'state'=>$this->input->post('state'),
		);
		$this->Employes_model->insert_employes($data);
		$this->load->view('insert3');
	}
	public function employeeUpdate()
	{
		$this->load->view('update3');
	}
	public function employeeDelete()
	{
		$this->load->view('delete3');
	}
	public function employeeDetails()
	{
		$data['value']=$this->Employes_model->view_employes();
		$this->load->view('view3',$data);
	}
	public function edit()
	{
		$this->load->view('edit3');

	}
}
