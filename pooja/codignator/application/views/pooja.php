<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<a href="<?php echo base_url();?>">Gupta</a>
	<a href="<?php echo base_url();?>index.php/student">student</a>
</div>
<form action="<?php echo base_url();?>index.php/insert" method="post">
	<table border="1">
		<center><?php echo  @$_REQUEST['msg'];?></center>
		<tr>
			<th>Name:</th>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<th>Last Name:</th>
			<td><input type="text" name="last"></td>
		</tr>
		<tr>
			<th>Address:</th>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<th>City</th>
			<td><input type="text" name="city"></td>
		</tr>
		<tr>
			<th>state</th>
			<td><input type="text" name="state"></td>
		</tr>
		<tr>
			
			<td colspan="2"><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</FORM>
</body>
</html>