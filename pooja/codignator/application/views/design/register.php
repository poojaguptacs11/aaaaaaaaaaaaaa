<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body bgcolor="grey">
	<center>
	<div>
		<form name="myform" action="<?php echo base_url();?>Register/save" method="post">
			<div> 
		      Student name:<input type="text" name="Student_name" value="" id="Student_name"></div>
		      <br>
		      <div> 
		      Student Id:<input type="text" name="Student_Id" value="" id="Student_Id"></div>
		      <br>
		      <div>
		      Password:<input type="Password" name="Password" value="" id="Password"> </div><br>
		      <div>
		      About you:<textarea row="3" cols="20" name="About_you" value="" id="About_you"></textarea></div><br>
		      <div>
		      	<lable>Subject:</lable>
               	<select name="Subject">
               <option>Please Select Subject</option>
               <?php foreach ($listing as $key => $value): ?>
               	<option value="<?php echo $value->title; ?>"><?php echo $value->title; ?></option>
               <?php endforeach ?>
           </select><br>
		      </div>
		
		      <div><input type="submit" name="submit" value="submit" id="submit"> 
		      	</div>
	</form>
</div>
</center>
</body>
</html>