<?php
defined ('BASEPATH') or exit ('xghfvghjbjknkl');

class Loginsignup extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url','file');
	}
	public function index()
	{
		$this->load->view('newf/loginsignup');
	}
}
?>