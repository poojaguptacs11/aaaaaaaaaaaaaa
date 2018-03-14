<?php
 $this->load->view('include/header');
$this->load->view('include/menu');

?>
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div>
                     <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           <h1> Student Form </h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url();?>form/save" name="myform" method="post" enctype="multipart/form-data" onsubmit="return validation(this);">
                                        <div class="form-group">
                                            <label>Student name</label>
                                            <input class="form-control"  placeholder="Enter your name" name="student_name" >
                                            
                                        </div>
                                        <div class="form-group">
                                            <label> Student Id</label>
                                            <input class="form-control" placeholder="Enter your Id" name="student_id">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>About your detail</label>
                                            <textarea class="form-control" rows="3" name="about_your_detail"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Class</label>
                                            <select class="form-control" name="class">
                                               <option>Please Select your class</option>
                                               <?php  foreach ($liste as $key => $value): ?>
                                                <option value="<?php echo $value->class_name; ?>"><?php echo $value->class_name; ?></option>
                                               <?php endforeach ?>
                                            </select>
                                           
                                        </div>
                                      <div class="form-group">
                                       <label>Section</label>
                                            <select class="form-control" name="section">
                                               <option>Please Select your section</option>
                                               <?php  foreach ($list as $key => $value): ?>
                                                <option value="<?php echo $value->section; ?>">
                                                    <?php echo $value->section; ?></option>
                                               <?php endforeach ?>
                                            </select>
                                </div>
                                        
                                        <div class="form-group">
                                            <label>Gender</label>
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
                                            <label>Important files</label>
                                            <input type="file" name="userfile">
                                        </div>
                                        <div class="form-group">
                                            <label>Teachers name</label>
                                            <select class="form-control" name="teachers_name">
                                               <option>Please Select your teacher</option>

                                               <?php foreach ($listing as  $value): ?>
                                                <option value="<?php echo @$value->techer_name; ?>"><?php echo @$value->teacher_name; ?></option>
                                               <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>All subject</label>
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
                                        
                                        <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>
                                    </form>
                                </div>
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
<script type="text/javascript">
    function validation(myform)
    {
        if(myform.student_name.value=='')
            {
                alert("please enter your name!")
                 myform.student_name.focus();
                 return false;
            }
        if(myform.student_id.value=='')
            {
               alert("please enter your id!")
               myfrom.student_id.focus();
                return false;
            }
         if(myform.about_your_detail.value=='')
            {
                alert("please enter your detail!")
                myform.about_your_detail.focus();
                return false;
            }
         if(myform.class.value=='')
            {
                alert("please enter your class!")
                myform.class.focus();
                return false;
            }   
          if(myform.section.value=='')
            {
                alert("please enter your section!")
                myfrom.section.focus();
                return false;
            }       
    }               
</script>

<?php $this->load->view('include/footer');?>