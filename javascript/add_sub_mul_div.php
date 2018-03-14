<script type="text/javascript">
	for(i=1;i<11;i++)
	{
		document.write(i*2+'<br>');
	}
</script>
///
<?php

for ($i=1; $i < 11 ; $i++) { 
	echo "<table border='1'><tr>";
	for ($j=1; $j < 101; $j++) { 
		print( "<td>". $i * $j ."</td>");
	}
	echo "</tr></table>";
}
echo "<br>";

for ($i='0'; $i < 5 ; $i++) { 
	for ($j=0; $j < 5; $j++) { 
		for ($k=0; $k < 5 ; $k++) { 
			echo "*";
		}
		
	}
	
}

for($i=0; $i<=11; $i++)
{
	if($i%2)
	{
		echo $i . 'odd<br>';
	}
	else
	{
		echo $i . 'even';
	}
}
for($i=1; $i<=5; $i++)
{
	for($j=1; $j<=5; $j++) 
	{
		echo "*";
	}
	echo "</br>";
}

for($i=1 ; $i<=5; $i++)
{
for($j=1 ; $j<=$i; $j++)
{
	echo "*";

}
 echo "</br>";
}
for($i=1 ; $i<=5; $i++)
{
for($j=1 ; $j<=$i; $j++)
{
	echo " *";

}

}


?>