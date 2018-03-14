<?php
include'config.php';
error_reporting(0);
chmod("upload",0600);

// Read and write for owner, read for everybody else
chmod("upload",0644);

// Everything for owner, read and execute for everybody else
chmod("upload",0755);

// Everything for owner, read for owner's group
chmod("upload",0740);

$R=$_REQUEST;

if($_FILES['image']['name']){
  $file_name= $_FILES['image']['name'];
  $destination= $_FILES['image']['tmp_name'];
  move_uploaded_file($destination,'upload/'.$file_name);
}
 
 if($_FILES['logo']['name']){
  $file_name1= $_FILES['logo']['name'];
  $destination1= $_FILES['logo']['tmp_name'];
   $image2=move_uploaded_file($destination1,'upload/'.$file_name1);
}
if($_FILES['whitepaper']['name']){
  $file_name2= $_FILES['whitepaper']['name'];
  $destination2= $_FILES['whitepaper']['tmp_name'];
   $image3=move_uploaded_file($destination2,'upload/'.$file_name2);
}

 echo $sql="INSERT INTO `listingico`( `email`, `image`, `address`, `logo`, `company_name`, `description`, `whitepaper`, `twitter`, `facebook`, `linkedin`, `google`, `website`, `video`, `team`, `milestones`,`password`) VALUES 

('$R[email]','".$file_name."','$R[address]','".$file_name1."','$R[company_name]','$R[description]','".$file_name2."','$R[twitter]','$R[facebook]','$R[linkedin]','$R[google]','$R[website]','$R[video]','$R[team]','$R[milestones]','$R[password]')";
 $query= mysqli_query($sqli, $sql);
 if($query)
 	
 {
header("Location:signup.php");
 }

?>