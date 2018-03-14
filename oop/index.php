<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Vertical Form Layout</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <?php
        include('class/user.php');
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Mark</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $studentList=$userObj->userList();
            if($studentList>0)
            {
                foreach($studentList as $key=>$stdVal)
                {
                    ?>
                    <tr>
                        <td><?php echo  $stdVal['name'];?></td>
                        <td><?php echo  $stdVal['class'];?></td>
                        <td><?php echo  $stdVal['mark'];?></td>
                    </tr>
                    <?php
                }
            }
            else
            {
                ?>
                <tr>
                <td colspan="3">No Student Found</td>
            </tr>
                <?php
            }
            ?>
            
        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-12">
            <?php
            if(isset($_REQUEST['m']))
            {
                if($_REQUEST['m']=="yes")
                {
                    ?>
                    <div class="alert alert-success fade in">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Success!</strong> You have registerd successfully.
                    </div>
                    <?php
                }
                else if($_REQUEST['m']=="fail")
                {
                    ?>
                    <div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Error!</strong> Something wrong!try again.
                </div>
                    <?php
                }
            }
            ?>
            <form id="userform" action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="userfile">File Upload</label>
                    <input type="File" name="userfile" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primay">Upload</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>                            