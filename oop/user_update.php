<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Vertical Form Layout</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        if(isset($_REQUEST['i']))
        {
        	$userData=$userObj->userDetails(base64_decode($_REQUEST['i']));
        	//print_r($userData);
        }
        
    ?>
    <div class="row">
        <div class="col-sm-12">
            <?php
            	if (isset($_POST['updt'])) {
					$file=$_FILES['userfile'];
					$uname=$_POST['username'];
					$pass=$_POST['password'];
					$userid=base64_decode($_POST['uid']);
					$filename=$file['name'];
					$file_ext=pathinfo($filename,PATHINFO_EXTENSION);
					$file_size=$file['size'];
					$file_error=$file['error'];
					$path="uploads/";
					$filename="opps".date('YmdHis').".".$file_ext;
					$path=$path.$filename;
					if($file_error==0)
					{
						if (move_uploaded_file($_FILES['userfile']['tmp_name'], $path)) {
							$dataUpdate=$userObj->userUpdate($userid,$filename,$uname,$pass);
							if($dataUpdate>0)
							{
								?>
			                    <div class="alert alert-success fade in">
			                        <a href="#" class="close" data-dismiss="alert">&times;</a>
			                        <strong>Success!</strong> You have updated successfully.
			                    </div>
			                    <?php
								header('Refresh:10,url=index.php');

							}
							else
							{
								?>
			                    <div class="alert alert-danger fade in">
			                    <a href="#" class="close" data-dismiss="alert">&times;</a>
			                    <strong>Error!</strong> Something wrong!try again.
			                </div>
			                    <?php
							}
						}
					}
            	}
            ?>
            <form id="userform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="uid" value="<?php echo $_REQUEST['i']; ?>">
                <div class="form-group">
                    <label for="userfile">File Upload</label>
                    <input type="File" name="userfile" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php if($userData['username']!=""){echo $userData['username']; } ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control" value="<?php if($userData['pasword']!="") {echo $userData['pasword']; }?>">
                </div>
                <button type="submit" name="updt" class="btn btn-primay">Update</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>                            