<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* develop by shubham Complete project
*/
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$obj=new Dateandtime();
		$v=$obj->dateT();
		$data=array('datee'=>$v,);
		$this->load->view('front/home',$data);	
	}
	
}