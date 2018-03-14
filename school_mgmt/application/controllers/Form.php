<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

Class Form extends CI_Controller
{
	public function __construct()
  {

	parent::__construct();
	$this->load->database();
  $this->load->helper(array('form', 'url','file'));
	$this->load->model('Classes_model');
	$this->load->model('Teacher_model');
	$this->load->model('Section_model');
  $this->load->library('upload');
  }
	public function index()
	{
		$data['liste']=$this->Classes_model->view_Classes();
		$data['listing']=$this->Teacher_model->view_Teacher();
		$data['list']=$this->Section_model->view_Section();
		$this->load->view('form',$data);
	}
	public function save()
  {
   // print_r($_FILES['userfile']['name']); die();
       $config['upload_path']          = '/uploads/';
       $config['allowed_types']        = 'gif|jpg|png';
       $config['max_size']             = 100;
       $config['max_width']            = 1024;
       $config['max_height']           = 768;
      //die();
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if ( ! $this->upload->do_upload('userfile'))
      {
        $error = array('error' => $this->upload->display_errors());
        //$this->load->view('upload_form', $error);
        echo "error";
      }
      else
      {
        $data = array('upload_data' => $this->upload->data());
        
           $image=$data['file_name'];     
        $data=array(
        'student_name'=> $this->input->post('student_name'),
        'student_id'=> $this->input->post('student_id'),
        'about_your_detail'=> $this->input->post('about_your_detail'),
        'class'=> $this->input->post('class'),
        'section'=> $this->input->post('section'),
        'gender'=> $this->input->post('gender'),
        'teachers_name'=> $this->input->post('teachers_name'),
        'all_subject'=> $this->input->post('all_subject'),
        'image'=>$image,
        );
        print_r($data); die();
        $this->Form_model->insert_Form($data);
       redirect('Form','refresh');
    }
  }

}
?>