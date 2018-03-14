<?php
$Fname = "pooja" ;
$Lname = "gupta";
	function display()
	{
		Global $Fname,$Lname;
		echo $Fname. "  ".$Lname."<br/>";
	}
display();
display();
display();
display();
 ?>


 <?php
$Fname = "this is globle function" ;
$Lname = "Yes I can do this.";
	function show()
	{
		Global $Fname,$Lname;
		echo $Fname. " <br/> ".$Lname."<br/>";
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
    <h3><?php show(); ?></h3>
 
 </body>
 </html>