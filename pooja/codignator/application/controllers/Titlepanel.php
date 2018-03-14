<?php
/**
* developed by pooja.
*/
   class Titlepanel extends CI_Controller
{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('url','file');
			$this->load->model('Titlepanel_model');
		}
		public function index()
		{
			$this->load->view('admin/pages/allpage/Titlepanel');
		}
	public function save()
	{
		$data=array(  
			'title' => $this->input->post('title'), 
		);

		$responce=$this->Titlepanel_model->insert_titlepanel($data);

		if($responce)
		{
			redirect('titlepanel','refresh');
		}		
	
    }
 }   
