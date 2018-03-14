<?php
include('./config/connect.php');
class User
{
	public function saveUser()
	{
		global $dbo;
		
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