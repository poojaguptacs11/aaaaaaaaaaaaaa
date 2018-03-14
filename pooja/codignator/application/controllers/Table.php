<?php
class Table extends CI_Controller
{
	
	public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	  $this->load->helper('url','file');
	  $this->load->model('Table_model');

	}
	public function index()
	{
		$query['data']=$this->Table_model->view_Table();
		$this->load->view('admin/pages/allpage/table',$query);
	}
}