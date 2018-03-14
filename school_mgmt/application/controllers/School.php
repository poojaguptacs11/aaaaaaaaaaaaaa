<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller 
{

	public function __construct()
	{
     parent::__construct();
     $this->load->database();
	  $this->load->helper('url','file');
	  $this->load->model('School_model');
	}
	public function index()
	{
		$this->load->view('school');
	}
	public function save()
	{
		$data=array(
         'school_name'=>$this->input->post('school_name'),
		);

		$this->School_model->insert_School($data);
		
		redirect(base_url().'school');		
	}

		public function edit($id)
    {
       // $arr['list']=$this->Classes_model->view_Classes();
        $arr['data']=$this->School_model->edit_data($id);
        //print_r($); die();
 
        redirect(base_url().'School');
    }
    public function view()
    {
        $arr['data']=$this->School_model->view_data();
        $this->load->view('Schooltable',$arr);
    }
    public function delete($id)
    {
       // print_r($id); die();
        $this->School_model->delete_data($id);
        $arr['data']=$this->School_model->view_data();
 
        redirect(base_url().'schooltable');
    }
    public function update()
    {
        echo $id=$this->input->post('id');
        $data=array( 
		'school_name'=>$this->input->post('school_name'),	
			); 
        
        $this->School_model->update3_data($data,$id);
        $arr['data']=$this->School_model->view_data();
       
        redirect(base_url().'schooltable');
    }
  
}

?> 

  
