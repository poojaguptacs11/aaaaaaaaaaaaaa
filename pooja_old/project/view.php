<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="FORM.php">Add</a>
	<table border="1">
		<tr>
		<td>id</td>
		<td>name</td>
		<td>last</td>
		<td>address</td>
		<td>city</td>
		<td>state</td>
		<td>Delete | Edit </td>
	</tr>
	<?php 
	include"config.php";
	$sql="select * from student";
	$query=mysqli_query($mysql, $sql);
	while($data=mysqli_fetch_assoc($query)){
		?>
	
	<tr>
		<td><?php echo $data['id']?></td>
		<td><?php echo $data['name']?></td>
		<td><?php echo $data['last']?></td>
		<td><?php echo $data['address']?></td>
		<td><?php echo $data['city']?></td>
		<td><?php echo $data['state']?></td>
		<td><a href="delete.php?id=<?php echo $data['id']?>">Delete </a>| Edit </td>
	</tr>
	<?php } ?>
	</table>
</body>
</html>