<?php
/**
* developed by pooja.
*/
   class Newpanel extends CI_Controller
{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->helper('url','file');
			$this->load->model('Newpanel_model');
		}
		public function index()
		{
			$this->load->view('admin/pages/allpage/newpanel');
		}

	public function save()
	{
		$data=array(  
			'Username' => $this->input->post('Username'), 
			'Password' =>$this->input->post('Password'), 
			 'City'=>$this->input->post('City'),
		     'State'=>$this->input->post('State'),
		     'Country'=>$this->input->post('Country'),
		     'Zipcode'=>$this->input->post('Zipcode'), 
		);

		$responce=$this->Newpanel_model->insert_newpanel($data);
		if($responce)
		{
			$this->session->set_flashdata('success', 'Your detail has been saved successfully.');
		}else{
			$this->session->set_flashdata('error', 'Error occured while saving your details!!!');
		}
		redirect('newpanel' ,'refresh');
	}
	public function edit($id)
	{
		$arr['data']=$this->Newpanel_model->edit_data($id);
		$this->load->view('admin/pages/allpage/update',$arr);
	}
	public function view()
	{
		$arr['data']=$this->Newpanel_model->view_data();
		$this->load->view('admin/pages/allpage/panelView',$arr);
	}
	public function delete($id)
	{
		$this->Newpanel_model->delete_data($id);
		$arr['data']=$this->Newpanel_model->view_data();
		$this->load->view('admin/pages/allpage/panelView',$arr);
	}
	public function update()
	{
		echo $id=$this->input->post('id');
		$data=array(  
			'Username' => $this->input->post('Username'), 
			'Password' =>$this->input->post('Password'), 
			 'City'=>$this->input->post('City'),
		     'State'=>$this->input->post('State'),
		     'Country'=>$this->input->post('Country'),
		     'Zipcode'=>$this->input->post('Zipcode'), 
		);
		
		$this->Newpanel_model->update_data($data,$id);
		$arr['data']=$this->Newpanel_model->view_data();
		$this->load->view('admin/pages/allpage/panelView',$arr);
	}
}
