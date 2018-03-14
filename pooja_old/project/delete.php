<?php
include"config.php";

$sql="DELETE FROM student WHERE  id='$_REQUEST[id]'";
 $query=mysqli_query($mysql, $sql);
header("location:FORM.php?msg=records delete successfully");
?>