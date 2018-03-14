<?php
include('config/connect.php');
class User
{
	public function saveUser($file,$user,$pass)
	{
		global $dbo;
		//echo "insert into  test_user set file='".$file."',username='".$user."',pasword='".$pass."'";
		$saveU=$dbo->prepare("insert into  test_user set file='".$file."',username='".$user."',pasword='".$pass."'");
		return $saveU->execute();
	}
	public function userList()
	{
		global $dbo;
		$userList=$dbo->prepare("select * from student order by id desc");
		$userList->execute();
		$userCount=$userList->rowCount();
		if($userCount>0)
		{
			while ($row=$userList->fetch(PDO::FETCH_ASSOC)) {
				$list[]=$row;
			}
		}
		else
		{
			return 0;
		}

		return $list;
	}
}
$userObj=new User();
?>