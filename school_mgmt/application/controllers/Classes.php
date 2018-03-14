<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Classes extends CI_Controller
 {
 	public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	  $this->load->helper(array('url','file'));
	  $this->load->model('Classes_model');
	}
		public function index()
	{
		$this->load->view('classes');
	}
	public function save()
	{
		$data =array(
         'class_name'=>$this->input->post('class'),  
		);
         $responce=$this->Classes_model->insert_Classes($data);
         if($responce)
		{
		  redirect(base_url().'ctable');
		}
	}

		public function edit($id)
    {
       // $arr['list']=$this->Classes_model->view_Classes();
        $arr['data']=$this->Classes_model->edit_data($id);
       //print_r($); die();
 
        redirect(base_url().'classes');
    }
    public function view()
    {
        $arr['data']=$this->Classes_model->view_data();
        $this->load->view('ctable',$arr);
    }
    public function delete($id)
    {
       // print_r($id); die();
        $this->Classes_model->delete_data($id);
        $arr['data']=$this->Classes_model->view_data();
 
        redirect(base_url().'ctable');
    }
    public function update()
    {
        echo $id=$this->input->post('id');
        $data=array( 
		'class_name'=>$this->input->post('class'),	
			); 
        
        $this->Classes_model->update2_data($data,$id);
        $arr['data']=$this->Classes_model->view_data();
       
        redirect(base_url().'ctable');
    }
  
}

?> 
