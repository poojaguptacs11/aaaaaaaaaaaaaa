<?php
 $this->load->view('include/header');
$this->load->view('include/menu');
?>

        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           <h1>Add/Edit School Name<h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url();?>school/save" name="myform" method="post" onsubmit="return validation(this);">
                                            
                                        </div>
                                        <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                                          <div class="form-group">
                                 <h3> School Name<input class="form-control" name="school_name"><h3>
                                        </div>
                                </div>
                                </div>
                              <div class="form-group">
                               <center><button type="submit" class="btn btn-info ">submit</button>
                                  </center> </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
    <script type="text/javascript">
        function validation(myform)
        {
            if(myform.school_name.value=='')
                {
                alert("please enter your school name!")
                myform.school_name.focus();
                return false;
                }
        
         }       
  </script>

<?php $this->load->view('include/footer');?>