<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
	
	$(document).ready(function()
	{
		
		$('#myform').click(function(e)
		{
		e.preventDefault();
		var datails = valrequired();
		if (datails) {
		$('#myform').submit();
		}
			first=$('#firstname').val()=='';
			if(first){$('#data').html('Please enter your name');
			return false;
			 }
			 last=$('#lastname').val()=='';
			if(last){$('#data1').html('please enter your last name');
			return false;
		      }

		});
	});
</script>
<body bgcolor="pink">
	<fieldset>
		<center>
		<div>
	<form name="myform" id="myform" method="post" onsubmit="return validationform(this);">
     <div>
     	FirstName:<input type="text" name="firstname" id="firstname" class="" size="30">
     	<span id="data" style ="color:red";></span>
     </div><br>
     <div>
     	<b>LastName:<input type="text" name="lastname" id="fastname" size="30"></b>
     	<span id="data1" style ="color:red";></span>
     </div><br>
     <div>
     	<b>Username:<input type="text" name="username" id="username" size="30"></b>
     </div><br>
     <div>
     	<b>password:<input type="password" name="password" id="password" size="30"></b>
     </div><br>    
     <div>
     	<b>Address:<input type="text" name="address" id="address" size="30"></b>
     </div><br> 
     <div>
       <b>Pincode:<input type="text" name="pincode" id="pincode" size="30"></b>
     </div><br>
     <div>
     	<b>Email Id:<input type="text" name="email_id" id="email_id" size="30"></b>
     </div> <br>
     	<div>
     		<b>Date of Birth:</b>	
     						
     		   <input type ="date" name="date" value="yyyy">
     		</div></br>
     		 <div>
     <b>Gander:</b><input type="radio" name="gender" value="male">Male
     	<input type="radio" name="gender" value="female">Female
     </div></br>

     		<div>

     		<b>Teacher's Name:</b>	<select>
     				<option>Teacher</option><option>Sanjay</option>
     			<option>Abhishek</option><option>Shubham</option>
     			<option>Naveen</option><option>Abhinaw</option>
     			<option>Ravi</option><option>Ritesh</option>
     			<option>Rahul</option><option>Piyush</option>
     			</select>
     			&
     		<b>Subject's Name:</b>	<select>
     				<option>subjects</option>
     				<option>Database</option><option>Autometa</option>
     			<option>webTech</option><option>Enterpreneur</option>
     			<option>Mathmatics1</option><option>Mathmatics2</option>
     			<option>Sofwaretesting</option><option>Concurrent</option>
     			<option>Electrical</option><option>Mechanics</option>
     			</select>
     		</div><br>
     		<div>
     			<b>Check it:</b>
     			<input type="checkbox" name="checkbox" id="checkbox"><input type="checkbox" name="checkbox" id="checkbox">
     			<input type="checkbox" name="checkbox" id="checkbox"><input type="checkbox" name="checkbox" id="checkbox">
     			<input type="checkbox" name="checkbox" id="checkbox"><input type="checkbox" name="checkbox" id="checkbox">
     		</div><br>
     		<div>
     			<b>Select it:</b>
     			<input type="radio" name="select" id="select"><input type="radio" name="Select" id="select">
     			<input type="radio" name="select" id="select"><input type="radio" name="select" id="select">
     			<input type="radio" name="select" id="select"><input type="radio" name="select" id="select">
     		</div>
     		<div>
     			<input type="submit" id="datasubmit" name="submit" value="submit">
     			<input type="reset" name="reset" value="reset">						
     		</div> 
	</form></div>
</center>
</fieldset>
</body>
</html> 