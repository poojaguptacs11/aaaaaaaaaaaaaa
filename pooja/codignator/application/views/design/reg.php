<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body bgcolor="orange">
	<center>
	<div>
		<form name="myform" action="<?php echo base_url();?>reg/save" method="post">
			<div> 
		      username:<input type="text" name="username" value="" id="username"></div>
		      <br>
		      <div>
		        password:<input type="password" name="password" value="" id="password"> </div><br>
		      <div>
		      email id:<input type="text" name="email_id" value="" id="email id"></div>
		      <br>
		      <div>
		      address:<input type="text" name="address" value="" id="address"></div><br>
		      <div>
		      	date of birth:<input type="date" name="date" value="yyyy" id="yyyy">
		      </div><br>
		      <div>
		      	gender:<input type="radio" name="gender" value="male" id="male">male
		      	<input type="radio" name="gender" value="female" id="female">female
		      </div><br>
		     <div> select it:<input type="checkbox" name="select" value="checkbox" id="checkbox"><input type="checkbox" name="select" value="checkbox" id="checkbox"><input type="checkbox" name="select" value="checkbox" id="checkbox"></div><br>
		      <div><input type="submit" name="submit" value="submit" id="submit"> 
		      	<input type="reset" name="submit" value="reset" id="reset"></div>
	</form>
</div>
</center>
</body>
</html>