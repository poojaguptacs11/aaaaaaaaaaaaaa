<?php
$this->load->view('include/header');
$this->load->view('include/menu');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Students form list</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                           Students Details
                        </div>
                       
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student name</th>
                                        <th>Student Id</th>
                                        <th>About your detail</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Gender</th>
                                        <th>Important files</th>
                                        <th>Teachers name</th>
                                        <th>All subject</th>
                                         <th>image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                     <?php $k=1; foreach($userdata as $user){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $k++?></td>
                                        <td><?php echo $user->student_name?></td>
                                        <td><?php echo $user->student_id?></td>
                                        <td><?php echo $user->about_your_detail?></td>
                                        <td><?php echo $user->class?></td>
                                        <td><?php echo $user->section?></td>
                                        <td><?php echo $user->gender?></td>
                                        <td><?php echo $user->teachers_name?></td>
                                        <td><?php echo $user->all_subject?></td>
                                        <td><?php echo $user->image?></td>

                                        <td><a href="<?php echo base_url();?>form/edit/<?php echo $user->id;?>"><span class="glyphicon glyphicon-edit"> </span></a></td>
                                         <td><a href="<?php echo base_url();?>form/delete/<?php echo $user->id;?>"><span class="glyphicon glyphicon-trash"> </span></a></td>
                                       
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
     </div>
 </div>

<?$this->load->view('include/footer');?>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>