<?php
	$data = array();	
	$data = array('pooja' => 30,'rahul' => 40, 'abhi' => 50 );

	echo "<pre>";
	print_r($data);
	echo "</pre>";
	?>


	<?php
	$data = array();
	
	$data[0] = array('pooja' ,'rahul' , 'abhi'  );
	$data[1] = array('abhinav' ,'abhija' , 'naveen' );

	echo "<pre>";
	print_r($data);
	echo "</pre>";

	?>


	<?php
    
	$data = array('pooja' ,'rahul' , 'abhi' );

	print_r($data);

	?>



<?php
	$data = array('pooja' ,'rahul' , 'abhi' );
		echo "<br/>".$data[0]." " .$data[1]. " " .$data[2];

	?>


<?php
	$data = array('pooja' ,'rahul' , 'abhi' );
		echo "<br/>".$data[0]."<br/>";
		echo $data[1]."<br/>";
		echo $data[2] ."<br/>";

	?>
