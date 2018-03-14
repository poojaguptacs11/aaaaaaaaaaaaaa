	<?php
class Titletable extends CI_Controller
{
	
	public function __construct()
	{
	  parent::__construct();
	  $this->load->database();
	  $this->load->helper('url','file');
	  $this->load->model('Titletable_model');

	}
	public function index()
	{
		$query['userdata']=$this->Titletable_model->view_Titletable();
		$this->load->view('admin/pages/allpage/titletable',$query);
	}
	public function delete($id)
	{
		$this->Titletable_model->delete_data($id);
		$arr['userdata']=$this->Titletable_model->view_data();
		$this->load->view('admin/pages/allpage/titletable',$arr);
	}
	
}