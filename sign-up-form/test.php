<?php 

if(isset($_POST['submit']))
{
	
 if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
		{	
$randString = md5(time()); //encode the timestamp - returns a 32 chars long string
  $fileName = $_FILES["image"]["name"]; //the original file name
  $splitName = explode(".", $fileName); //split the file name by the dot
  $fileExt = end($splitName); //get the file extension
  $newFileName  = strtolower($randString.'.'.$fileExt); //join file name and ext.
   move_uploaded_file( $_FILES['image']['tmp_name'],"upload/".$newFileName);
    $image = "upload/".$newFileName;
    
		}else{
			$image='';
		}

echo "test";
}
?>


<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="image"  value="upload">
	<input type="submit" name="submit" value="submit">
</form>