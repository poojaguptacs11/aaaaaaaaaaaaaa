
<?php
if(@$_REQUEST['add'])
{
	  $b=$_POST['num1'];
	  $a=$_POST['num2'];
	  @$res=$a+$b;
} 
else if(@$_REQUEST['sub'])
{
	$b=$_POST['num1'];
	  $a=$_POST['num2'];
	  $res=$a-$b;
} 
else if(@$_REQUEST['mul'])
{
	$b=$_POST['num1'];
	  $a=$_POST['num2'];
	  $res=$a*$b;
} 
else if(@$_REQUEST['div'])
{

	$b=$_POST['num1'];
	  $a=$_POST['num2'];
	  $res=$b/$a;

} 

?>
<!DOCTYPE html>
<html>
<head>
	<title>calculater</title>
</head>
<body>
	<form action="#" method="post">
	<div>num1:<input type="text" name="num1"></div>
	<div>num2:<input type="text" name="num2"></div>
	<div>result:<input type="text" name="result" value="<?php echo @$res;?>"></div>
add <input  type="checkbox" name="add"  class="btn btn-danger" value="add">
sub <input type="checkbox" name="sub" class="btn btn-danger" value="sub">
mul<input type="checkbox" name="mul" class="btn btn-danger" value="mul">
div<input type="checkbox" name="div" class="btn btn-danger" value="div">
<input type="submit" name="submit" value="send">
</form>


</body>
</html>


