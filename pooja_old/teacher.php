<?php 
$sql=mysqli_connect('localhost','root','','school') or die('error');
echo $query="select * from teacher";
echo $q=mysql($sql, $query);

?>