<?php
$s=7;
if($s<6)
{
	echo "num is       ","true";
} 
else if( $s<8)
{
	echo 'num is    ' ,"false";
}
 else 
 {
 	echo false;
 }

?>
<?php
    switch('data') {
        case 1:
            echo 4;
         break;  
         case 2:
            echo 8;
         break;  
         case 3:
            echo 9;
         break;  
         default:
             echo '4654758687	';
    }
    ?>

     <?php
      for ($leap = 2004; $leap < 2050; $leap = $leap + 4) {
        echo "<p>$leap</p>";
      }
    ?>for loop...
        <?php
        // Echoes the first five even numbers
        for ($i = 1; $i <= 10; $i= $i+2)
        {
          echo $i;
       }
      ?>