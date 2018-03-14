<?php 
$this->load->view('include/header');
$this->load->view('include/menu');
?>
        <!-- Navigation -->
        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                           <h1>Add/Edit Sections<h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url();?>section/update" method="post">    
                                        </div>
                                     <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                                          <div class="form-group">
                                 <label>Class</label>
                                            <select class="form-control" name="class">
                                               <option>Please Select your class</option>
                                               <?php  foreach ($list as $key => $value): ?>
                                                <option value="<?php echo $value->class_name; ?>"><?php echo $value->class_name; ?></option>
                                               <?php endforeach ?>
                                            </select>
                                        </div>

                                </div>
                                <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                                          <div class="form-group">
                                 Section<input class="form-control" name="section">
                                        </div>
                                </div>
                                </div>
                              <div class="form-group">
                               <center><button type="submit" class="btn btn-success">Update</button>
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
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

  

<?php $this->load->view('include/footer');?>