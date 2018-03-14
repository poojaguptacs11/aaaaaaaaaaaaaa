<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['value']=array(
			'name'=>'pooja',
			'lastname'=>'gupta',
			'address'=>'allahabad',
			'city'=>'allahabad',
			'state'=>'up',
		);
		$this->load->view('pooja', $data);
	}
}
