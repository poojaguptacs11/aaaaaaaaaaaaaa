
<?php

for($x = 0; $x <=9; $x++ )
{
	echo $x."<br/>";
}
?>

<?php
$data = array (1,2,3,4,5,6,7,8,9,0);

for($x = 0; $x <=9; $x++ )
{
	echo "<br/>". $data[$x]."<br/>";
}
?>



<?php
$x=array("pooja","gupta","gudiya");
foreach ($x as $key => $value) {
	echo ($key.":".$value."<br/>");
}
foreach ($x as $key ) {
	echo"<li>$key</li>";
}

$x=array("golo","abhi","appu");
foreach ($x as $abcd ) {
	echo"<li>$abcd</li>";
}
	shuffle($x);//this is for only change the key(abcd) on refreshing;
foreach ($x as $abcd ) {
	echo($abcd."<br/>");
}
?>
 <?php
        $yardlines = array("The 50... ", "the 40... ",
        "the 30... ", "the 20... ", "the 10... ");
        // Write your foreach loop below this line
        foreach($yardlines as $data)
        {
            echo $data;
        }
       ?>
       <?php
function familyName() {
    echo "heloo<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
