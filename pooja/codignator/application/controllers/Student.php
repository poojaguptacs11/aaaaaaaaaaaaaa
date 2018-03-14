<?php
class Student extends CI_Controller
{
	
	public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	  $this->load->helper('url','file');
	  $this->load->model('student_model');
	}
	public function index()
	{
		$this->load->view('student2');
	}
	public function insert()
	{
		$this->load->view('insert2');
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
		$this->student_model->insert_student($data);
		$this->load->view('insert2');
	}
	public function update()
	{
		$this->load->view('update2');
	}
    public function delete()
	{
		$this->load->view('delete2');
	}
	public function view()
	{
		$data['value']=$this->student_model->view_student();
		$this->load->view('view2',$data);
	}
	public function edit()
	{
		$this->load->view('edit2');
	}

}

