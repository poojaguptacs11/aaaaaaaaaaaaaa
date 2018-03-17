<?php
include ('./config/connect.php');
class User 
	{
		public function saveU($uname,$upsw,$email,$mob)
		{
			global $dbo;
			$saveUser=$dbo->prepare("insert into users set username='".$uname."', userpsw='".$upsw."', email_id='".$email."', mob_no='".$mob."' ");
			return $saveUser->execute();
		}
	
		public function userLogin($user,$psw)	
		 {
		 	global $dbo;
				$userLogin=$dbo->prepare("select * from users where  email_id='".$user."' and  userpsw='".$psw."' ");
		 	$userLogin->execute();

		 	$userLoginCount=$userLogin->rowCount();
		 	if($userLoginCount>0)
		 	{
		 		$row=$userLogin->fetch(PDO::FETCH_ASSOC);
		 		session_start();
		 		$_SESSION['uid']=$row['id'];
		 		$_SESSION['uemail']=$row['email_id'];
		 		$_SESSION['username']=$row['username'];
		 		return $userLoginCount;
		 	}
		 	else
		 	{
		 		return $userLoginCount;
		 	}
		 	

		}
	}	

	$obj = new User();
?>