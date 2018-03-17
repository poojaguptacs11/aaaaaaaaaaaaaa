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
	public function newUserList()
	{
		global $dbo;
		$userlist = $dbo->prepare("select * from test_user order by id desc");
		$userlist->execute();
		$userCount=$userlist->rowCount();
		if($userCount>0)
		{
			while ($row=$userlist->fetch(PDO::FETCH_ASSOC)) {
				$list[]=$row;
			}
		}
		else
		{
			return 0;
		}

		return $list;
	}

	public function userUpdate($userid,$file,$user,$pass){
		global $dbo;
		$saveUpdate=$dbo->prepare("update test_user set file='".$file."',username='".$user."',pasword='".$pass."' where id=".$userid."");
		return $saveUpdate->execute();
	}
	public function userDetails($uid)
	{
		global $dbo;
		$userDetail=$dbo->prepare("select * from test_user where id=".$uid."");
		$userDetail->execute();
		$row=$userDetail->fetch(PDO::FETCH_ASSOC);
		return $row;
	}
}
$userObj=new User();
?>