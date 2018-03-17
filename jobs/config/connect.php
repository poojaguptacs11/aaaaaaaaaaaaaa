<?php
    
class Connect
	{
		public $dbo;
		public function __construct()
		{
			global $dbo;
			$hostname = "localhost";
			$dbname	  = "jobs";
			$username = "root";
			$password = "";
			try {
			    $dbo = new PDO('mysql:host='.$hostname.';dbname='.$dbname, $username, $password);
			  
			  $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			    }
			catch(PDOException $e)
			    {
			    echo "Connection failed: " . $e->getMessage()."<br/>";
			    die();
			    }
		}
	}
	$obj = new Connect();
?>