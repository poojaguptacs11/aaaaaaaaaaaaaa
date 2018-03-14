<?php
include"config.php";
$R=$_REQUEST;
$sql="INSERT INTO student(name,last,address,state,city) value('$R[name]','$R[last]','$R[address]','$R[state]','$R[city]')";
 $query=mysqli_query($mysql, $sql);
header("location:view.php?msg=records save successfully");
?>