<?php
/**
* developed by Shubham.
*/
   class Pages extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/index');
	}
	public function form()
	{
		$this->load->view('admin/pages/allpage/form');
	}
}
