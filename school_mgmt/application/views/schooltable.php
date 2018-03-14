<?php
 $this->load->view('include/header');
$this->load->view('include/menu');

?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> School list</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                          Schools Details
                        </div>
                       
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>School</th>
                                     
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                     <?php $k=1; foreach($userdata as $user){?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $k++?></td>
                                
                                        <td><?php echo $user->school_name?></td>
                                        <td><a href="<?php echo base_url();?>school/edit/<?php echo $user->id;?>"><span class="glyphicon glyphicon-edit"> </span></a></td>
                                         <td><a href="<?php echo base_url();?>school/delete/<?php echo $user->id;?>"><span class="glyphicon glyphicon-trash"> </span></a></td>
                                       
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