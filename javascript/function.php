<?php
function x($data,$myform)
{
	echo $data+$myform;

}
x(54,7);

function y($data,$myform)
{
	echo $data.$myform;

}
y('pooja','gupta');

function myform()
{
	static $x=10;
	echo $x;
	$x++;
}
myform();
?>



<?php
 function display($data)
 {
 	echo "My name is :  ". $data;

 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>
	<h3><?php  display ("pooja gupta"); ?></h3>

</body>
</html>

