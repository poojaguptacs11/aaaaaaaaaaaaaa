<?php
include ('class/user.php');
$file=$_FILES['userfile'];
$uname=$_POST['username'];
$pass=$_POST['password'];
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
		$studentSave=$userObj->saveUser($filename,$uname,$pass);
		if($studentSave>0)
		{
			header('Location:index.php?m=yes');
		}
		else
		{
			header('Location:index.php?m=fail');
		}
	}

}
?>