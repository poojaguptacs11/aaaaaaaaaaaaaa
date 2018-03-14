<!DOCTYPE html>


<html>
<head>
	<title>javascript</title>
	<style>
		#myDiv
		{
			border:1px solid #cccccc;
			height:400px; 
			width:400px;
			margin-left:200px;
		}
		.btnDiv
		{
			margin-left:250px;
			margin-top:30px;
		}
	</style>
	<script type="text/javascript">
		function www()
		{
			document.getElementById("myDiv").style.backgroundColor = "red";
			//document.getElementById("myDiv").style.height = "200px";
			//document.getElementById("myDiv").style.width = "200px";
		}
		function yyy()
		{
			document.getElementById("myDiv").style.backgroundColor = "green";
		}
		function zzz()
		{
			document.getElementById("myDiv").style.backgroundColor = "blue";
		}
	</script>
</head>
<body>
	<form action="#">
<div id="myDiv"  class="topDiv">

</div>
<div class="btnDiv">
<button type="button" class="btn btn-danger" onclick="www()"> Button</button>
<button type="button" class="btn btn-success" onclick="yyy()"> Button</button>
<button type="button" class="btn btn-info" onclick="zzz()"> Button</button>
</div>

</body>
</html>


