<?php
class Studentform extends CI_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
       $this->load->helper(array('form', 'url'));
      //$this->load->library('upload');
      $this->load->model('Studentform_model');
      $this->load->model('Titlepanel_model');
    }
    public function index()
    {

        $this->load->view('admin/index',$arr);
    }
    public function insert()
    {
        $arr['listing']=$this->Titlepanel_model->listing();
        $this->load->view('admin/pages/allpage/studentform',$arr);
    }
    public function save()
    {
        
        $data=array(
          'student_name'=>$this->input->post('student_name'),
        'student_id'=>$this->input->post('student_id'),
        'about_your_detail'=>$this->input->post('about_your_detail'),
        'class'=>$this->input->post('class'),
        'gender'=>$this->input->post('gender'),
        'teachers_name'=>$this->input->post('teachers_name'),
        'all_subject'=>$this->input->post('all_subject'),
    );
        $this->Studentform_model->insert_Studentform($data);
       redirect('Studentform','refresh');
    }
    
    /*public function imageupload()
    {
        $this->load->view('admin/pages/allpage/imageupload');
    }
    public function upload_image()
    {
        //echo $_FILES['important_file']['name'];
         echo $config['upload_path']   = base_url().'uploads/'; 
         echo $config['allowed_types'] = 'gif|jpg|png'; 
         echo $config['max_size']      = 100; 
         echo $config['max_width']     = 1024; 
         echo $config['max_height']    = 768;  
         
         $this->load->library('upload', $config);
         $this->load->initialize($config);
         $this->upload->initialize($config);
           // die();
         if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            //$this->load->view('admin/pages/allpage/imageupload', $error); 
         }
            
         else { 
           echo $data['pic_file'] = array('upload_data' => $this->upload->data()); 
            echo $data['pic_file'] = $upload_data['file_name'];
            //$this->load->view('admin/pages/allpage/imageupload', $data); 
         } 
}
*/
    public function edit($id)
    {
        $arr['data']=$this->Studentform_model->edit_data($id);
        $this->load->view('admin/pages/allpage/updatetable',$arr);
    }
    public function view()
    {
        $arr['data']=$this->Studentform_model->view_data();
        $this->load->view('admin/pages/allpage/table',$arr);
    }
    public function delete($id)
    {
        $this->Studentform_model->delete_data($id);
        $arr['data']=$this->Studentform_model->view_data();
        $this->load->view('admin/pages/allpage/table',$arr);
    }
    public function update()
    {
        echo $id=$this->input->post('id');
        $data=array(  
        'student_name'=>$this->input->post('student_name'),
        'student_id'=>$this->input->post('student_id'),
        'about_your_detail'=>$this->input->post('about_your_detail'),
        'class'=>$this->input->post('class'),
        'gender'=>$this->input->post('gender'),
        'teachers_name'=>$this->input->post('teachers_name'),
        'all_subject'=>$this->input->post('all_subject'),
    );
        
        $this->Studentform_model->update_data($data,$id);
        $arr['data']=$this->Studentform_model->view_data();
        $this->load->view('admin/pages/allpage/table',$arr);
    }
}
