<?php
$this->load->view('include/header');
$this->load->view('include/menu');
?>

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div>
                     <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                           <h1> Full Form </h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	
                                <div class="col-lg-6">
                                	
                                    <form role="form" action="<?php echo base_url();?>fullform/save" method="post">
                                        <div class="form-group">
                                            <label>student name</label>
                                            <input class="form-control"  placeholder="Enter your name" name="student_name" >
                                            
                                        </div>
                                        <div class="form-group">
                                            <label> student id</label>
                                            <input class="form-control" placeholder="Enter your Id" name="student_id">
                                        </div>
                                        <div class="form-group">
                                            <label> email id</label>
                                            <input class="form-control" placeholder="Enter your email Id" name="email_id">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>about your detail</label>
                                            <textarea class="form-control" rows="3" name="about_your_detail"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>class</label>
                                            <select class="form-control" name="class">
                                               <option>please select your class</option>
                                               <?php  foreach ($liste as $key => $value): ?>
                                                <option value="<?php echo $value->class_name; ?>"><?php echo $value->class_name; ?></option>
                                               <?php endforeach ?>
                                            </select>
                                           
                                        </div>
                                      <div class="form-group">
                                       <label>section</label>
                                            <select class="form-control" name="section">
                                               <option>please select your section</option>
                                               <?php  foreach ($list as $key => $value): ?>
                                                <option value="<?php echo $value->section; ?>">
                                                    <?php echo $value->section; ?></option>
                                               <?php endforeach ?>
                                            </select>
                                </div>
                                        
                                        <div class="form-group">
                                            <label>gender</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="male" value="male">male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="female" value=" female">female
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="other" value="other">other
                                            </label>
                                        </div>
                                         <div class="form-group">
                                            <label>category</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="category" id="OBC" value="OBC">OBC
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="category" id="ST" value="ST">ST
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="category" id="Genral" value="Genral">GENRAL
                                            </label>
                                        </div>
                                        <div class="form-group">
                                        	<label>branch</label>
                                            <select class="form-control" name="branch">
                                            	<option ></option>
                                                <option>CS</option>
                                                <option>ME</option>
                                                <option>CE</option>
                                                <option>EE</option>
                                                <option>EC</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>all subject</label>
                                            <select multiple class="form-control" name="all_subject">
                                                <option>Math</option>
                                                <option>English</option>
                                                <option>Hindi</option>
                                                <option>Science</option>
                                                <option>Art</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Take more information</label>
                                            <p class="form-control-static"> when you have any problem then check on this email@example.com</p>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-danger">Submit Button</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
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
                    </div>
                    <div>
                 
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->
        </div>




<?$this->load->view('include/footer');?>