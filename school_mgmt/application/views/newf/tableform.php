<?php
 $this->load->view('include/header');
$this->load->view('include/menu');

?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                           Classes Details
                        </div>
                       
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>student name</th>
                                        <th>student id</th>
                                        <th>email id</th>
                                        <th>about your detail</th>
                                        <th>class</th>
                                        <th>section</th>
                                        <th>gender</th>
                                        <th>category</th>
                                        <th>branch</th>
                                        <th>all_subject</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                     <?php $k=1; foreach($userdata as $user){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $k++?></td>
                                        <td><?php echo $user->student_name?></td>
                                        <td><?php echo $user->student_id?></td>
                                         <td><?php echo $user->email_id?></td>
                                        <td><?php echo $user->about_your_detail?></td>
                                        <td><?php echo $user->class?></td>
                                        <td><?php echo $user->section?></td>
                                        <td><?php echo $user->gender?></td>
                                        <td><?php echo $user->category?></td>
                                        <td><?php echo $user->branch?></td>
                                        <td><?php echo $user->all_subject?></td>

                                        <td><a href="<?php echo base_url();?>fullform/edit/<?php echo $user->id;?>"><span class="glyphicon glyphicon-edit"> </span></a></td>
                                         <td><a href="<?php echo base_url();?>fullform/delete/<?php echo $user->id;?>"><span class="glyphicon glyphicon-trash"> </span></a></td>
                                       
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
   




<?php $this->load->view('include/footer');?>
 <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>