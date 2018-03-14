<?php
$sqli=mysqli_connect('localhost','root','','sign_up') or die('not connected!');
if($sqli){
	echo "connect";
}
else{
	echo "not connectd";
}
?>