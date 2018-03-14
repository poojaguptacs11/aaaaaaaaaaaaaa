<?php
class Register extends CI_Controller
{
	public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
      $this->load->helper('url','file');
      $this->load->model('Register_model');
      $this->load->model('Titlepanel_model');
	}
	public function index()
	{
		$arr['listing']=$this->Titlepanel_model->listing();
		$this->load->view('design/Register',$arr);
	}
	public function insert()
	{
		$this->load->view('insert');
	}
	public function save()
	{
		$data=array(
	    'Student_name'=>$this->input->post('Student_name'),
	    'Student_Id'=>$this->input->post('Student_Id'),
	     'Password'=>$this->input->post('Password'),
	   'About_you'=>$this->input->post('About_you'),
	    'Subject'=>$this->input->post('Subject'),
	);
		
		$this->Register_model->insert_Register($data);
		redirect('Register','refresh');
	}
public function edit($id)
	{
		$arr['userdata']=$this->Register_model->edit_data($id);
		$this->load->view('admin/pages/allpage/edit',$arr);
	}
	public function view()
	{
		$arr['data']=$this->Register_model->view_data();
		$this->load->view('admin/pages/allpage/titletable',$arr);
	}
	public function delete($id)
	{
		$this->Register_model->delete_data($id);
		$arr['userdata']=$this->Register_model->view_data();
		$this->load->view('admin/pages/allpage/titletable',$arr);
	}
	public function update()
	{
		echo $id=$this->input->post('id');
		$data=array(  
			'Student_name' => $this->input->post('Student_name'), 
			'Student_Id' =>$this->input->post('Student_Id'), 
			 'Password'=>$this->input->post('Password'),
		     'About_you'=>$this->input->post('About_you'),
		     'Subject'=>$this->input->post('Subject'), 
		);
		$this->Register_model->update_data($data,$id);
		$arr['userdata']=$this->Register_model->view_data();
		$this->load->view('admin/pages/allpage/titletable',$arr);
	}
}