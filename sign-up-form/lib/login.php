<?php
   include"../config.php";
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($sqli,$_POST['email']);
      $mypassword = mysqli_real_escape_string($sqli,$_POST['password']); 
      
      echo $sql = "SELECT * FROM users WHERE email = '$myusername' and password = '$mypassword'";
      echo $result =mysqli_query($sqli, $sql) or die('not connected');
      echo $row = mysqli_fetch_assoc($result);
      foreach ($row as $key => $value) {
      	echo $value;
      }
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location:../index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>