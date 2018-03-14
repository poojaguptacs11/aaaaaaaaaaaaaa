<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends CI_Controller
{
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 		$this->load->helper(array('url','file'));
	   $this->load->model('Section_model');
	   $this->load->model('Classes_model');
 	}
	public function index()
	{
        //echo $_REQUEST['dt']; 
		$data['list']=$this->Classes_model->view_Classes();

		$this->load->view('section',$data);
	}
	public function save()
	{
		$data =array(
			'section'=>$this->input->post('section'),
			'class'=>$this->input->post('class'),	
		);

	     $this->Section_model->insert_Section($data);

		redirect(base_url().'classtable');
	}
	public function edit($id)
    {
       // $arr['list']=$this->Classes_model->view_Classes();
        $arr['data']=$this->Section_model->edit_data($id);
        //print_r($); die();
 
        redirect(base_url().'section');
    }
    public function view()
    {
        $arr['data']=$this->Section_model->view_data();
        $this->load->view('classtable',$arr);
    }
    public function delete($id)
    {
       // print_r($id); die();
        $this->Section_model->delete_data($id);
        $arr['data']=$this->Section_model->view_data();
 
        redirect(base_url().'classtable');
    }
    public function update()
    {
        echo $id=$this->input->post('id');
        $data=array( 
        'section'=>$this->input->post('section'),
		'class'=>$this->input->post('class'),	
			); 
        
        $this->Section_model->update_data($data,$id);
        $arr['data']=$this->Section_model->view_data();
       
        redirect(base_url().'classtable');
    }
    public function getClass()
    {
        $class=$this->input->post('e');
        echo $class;
    }
}
?>