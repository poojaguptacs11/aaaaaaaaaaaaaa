<?php
$this->load->view('include/header');
$this->load->view('include/menu');
?>



         <div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-12 ">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1><a href="<?php echo base_url();?>teacher"> Teacher name</a><h1>
                        </div>
                        <div class="panel-body">
                        <div class="row show-grid">
                           
                                          
                             <form  action="<?php echo base_url();?>teacher/save" role="form" name="abc"  method="post" onsubmit="return validation(this);">
                                <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                                   
                                    <div class="form-group">
                                            <label>Teacher name</label>
                                            <input class="form-control" name="teacher_name">
                                        </div>
                                </div>
                            
                                </div>
                              <div class="form-group">

                                 <center> 
                         <button type="submit" class="btn btn-info">submit</button>
                                  </center>         
                                  </div>
                        </div>
                    </form>
    <script type="text/javascript">
      function validation(myform)
      {
        if(myform.teacher_name.value=='')
          {
            alert("please enter your teacher name!");
              myform.teacher_name.focus();
              return false;
          }
      }
    </script>                
                      
    <?php $this->load->view('include/footer')?>
