<?php
class Connect
{
	public $dbo;
	function __construct()
	{
		global $dbo;

		$host="localhost";
		$db="pdoexmp";
		$user="root";
		$pass="";
		try {
		$dbo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
		} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
		}
	}
}
$obj=new Connect();
?>