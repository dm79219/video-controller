<?php
require "core.inc.php";
require "connect.inc.php";
include "condition.php";
$success=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($FirstName)&&!empty($LastName)&&!empty($date)&&!empty($email)&&!empty($password)&&!empty($con_pass))
	{
		$query="SELECT `email` FROM `user` WHERE `email`='$email'";
		$query_run=mysql_query($query);
		if(mysql_num_rows($query_run)==1)
		{
			$email="";
			$success=false;
		}
		else
		{
			$password_hash=md5($password);
			$query="INSERT INTO `user` values ('','".mysql_real_escape_string($FirstName)."','".mysql_real_escape_string($MiddleName)."','".mysql_real_escape_string($LastName)."','".mysql_real_escape_string($year).'-'.mysql_real_escape_string($month).'-'.mysql_real_escape_string($date)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($password_hash)."')";
			if($query_run=mysql_query($query))
			{
				$success=true;
			}
			else
			{
				$success=false;
			}
		}
	}
}
if($success==true)
header('Location:register_success.php');
else
//header('Location:signup.html');
?>