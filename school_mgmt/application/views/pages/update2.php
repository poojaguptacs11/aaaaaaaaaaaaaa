<?php
 $this->load->view('include/header');
$this->load->view('include/menu');

?>


        <!-- Navigation -->
        

        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                           <h1>Add/Edit Classes<h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form role="form" action="<?php echo base_url();?>classes/update" name="myform" method="post" onsubmit="return validation(this);">
                                            
                                        </div>
                                        <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                                          <div class="form-group">
                                 <h3>class<input class="form-control" name="class"><h3>
                                        </div>
                                </div>
                                
                                </div>
                              <div class="form-group">
                               <center><button type="submit" class="btn btn-danger ">update</button>
                                  </center> </div>
                                    </form>
                                </div>
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
          if(myform.class.value=='')
            {
            alert("please enter your class!");
              myform.class.focus();
              return false;
          }
        }
    </script>
  

<?php $this->load->view('include/footer');?>