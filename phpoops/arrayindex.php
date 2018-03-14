<?php
$count=0;
 $data = array('Allahabad'=>
 	          array('phaphamau'=>'phaphamau','ismileGanj'=>'ismileGanj'),
	'pratapgarh'=>
	          array('bhupiyamau'=>'bhupiyamau','Railway'=>'Railway'),);
// echo $data[$count++];
foreach ($data as $key=> $value)
 {
 	//echo $value[0][$key];
 	foreach ($value as  $values) {
 		echo $key.'","'.$values.'"';
 	}
 }
 
?>
<?php
 $arrayName = array('one' => 1,'two'=>2,'three'=>3,'four'=>4,'five'=>5,'six'=>6,'seven'=>7,
 					'eight'=>8,'nine'=>9,'ten'=>10 );
 					
?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>arrayindexing</title>
		</head>
		<body>

 					<?php 
 						foreach($arrayName as $key=> $value)
 						{
 							?>
 						<h2> <?php	echo ($key .":". $value."<br/>");?></h2>
 						<?php

 						   }
 						?>	

    				
		</body>
		</html>