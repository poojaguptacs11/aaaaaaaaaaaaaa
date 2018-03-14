<!DOCTYPE html>
<html>
<head>
	<title>update form</title>
	<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
</head>
<body bgcolor="grey">
	<center>
	<div>
		 <?php foreach($userdata as $user){?>
		<form name="myform" action="<?php echo base_url('register/update');?>" method="post">
			<div> 
		      Student name:<input type="text" name="Student_name" value="<?php echo $user->Student_name; ?>" id="Student_name"></div>
		      <br>
		      <div> 
		      Student Id:<input type="text" name="Student_Id" value="<?php echo $user->Student_Id; ?>" id="Student_Id"></div>
		      <br>
		      <div>
		      Password:<input type="Password" name="Password" value="<?php echo $user->Password; ?>" id="Password"> 
		  		</div><br>
		      <div>
		      About you:<textarea row="3" cols="20" name="About_you" id="About_you"><?php echo $user->About_you; ?></textarea>
		      <script>
			CKEDITOR.replace( 'jgfj' );
			</script>
		  </div>
		  <br>
		      <div>
		      	<lable>Subject:</lable>
               	<select name="Subject">
               <option>Please Select Subject</option>
               <?php foreach ($listing as $key => $value): ?>
               	<option value="<?php echo $value->title; ?>"><?php echo $value->title; ?></option>
               <?php endforeach ?>
           </select><br>
		      </div>
		
		      <div class="form-group">
                                     <input class="form-control" type="hidden" name="id" value="<?php echo $user->id;?>">
                                 <center> 
                                   <button name="submit" type="update">update</button>
                                  </center>
               </div>
               <?php }?>
	</form>
</div>
</center>
</body>
</html>