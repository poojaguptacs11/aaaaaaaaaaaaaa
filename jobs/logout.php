<?php
		session_start();
      	unset($_SESSION['uid']);
      	unset($_SESSION['uemail']);
      	unset($_SESSION['username']);
      	session_destroy();
      	header('Location:login.php');
?>