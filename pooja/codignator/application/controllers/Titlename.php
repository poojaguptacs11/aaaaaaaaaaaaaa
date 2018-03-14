<?php
/**
* developed by pooja.
*/
   class Titlename extends CI_Controller
{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('url','file');
			$this->load->model('Titlename_model');
		}
		public function index()
		{
			$this->load->view('admin/pages/allpage/Titlename');
		}
	public function save()
	{
		$data=array(  
			'School_Name' => $this->input->post('School_Name'), 
		);

		$responce=$this->Titlename_model->insert_titlename($data);

		if($responce)
		{
			redirect('titlename','refresh');
		}		
	
    }
 }   
