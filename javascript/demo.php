

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" name="abc" method="post" onsubmit="return validation(this);">

	<div>name:<input type="text"  name="a"></div>
	<div>address:<input type="text"  name="b"></div>
	<div>city:<input type="text"  name="c"></div>
	<div>state:<input type="text" name="d"></div>
	<div>country:<input type="text"  name="e"></div>
	<div>pincode:<input type="text" name="f"></div>
	<div>phone:<input type="text"  name="g"></div>

	<input type="submit" name="submit" id="submit" value="submit"></div>
	</form>
</body>
</html>
<script type="text/javascript">
	function validation(abc)
	{
		if(abc.a.value=='')
		{
			alert("please enter your name!");
			abc.a.focus();
			return false;
		}
		if(abc.b.value=='')
		{
			alert("please enter your address!");
			abc.b.focus();
			return false;
		}
		if(abc.c.value=='')
		{
			alert("please enter your city!");
			abc.c.focus();
			return false;
		}
		if(abc.d.value=='')
		{
			alert("please enter your state!");
			abc.d.focus();
			return false;
		}
		if(abc.e.value=='')
		{
			alert("please enter your country!");
			abc.e.focus();
			return false;
		}
		if(abc.f.value=='')
		{
			alert("please enter your pincode!");
			abc.f.focus();
			return false;
		}
		if(abc.g.value=='')
		{
			alert("please enter your phone!");
			abc.g.focus();
			return false;
		}
		return true;
	}			
	             
</script>



