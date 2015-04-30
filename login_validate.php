<?php
require "core.inc.php";
require "connect.inc.php";
$Error="";
$success=false;
if(isset($_POST['username'])&&isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_hash=md5($password);
	if(empty($username)||empty($password))
	{
		$Error="Username and Password both are required";
	}
	if(!empty($username)&&!empty($password))
	{
		$query="SELECT id FROM user WHERE Email='".mysql_real_escape_string($username)."' AND Password='".mysql_real_escape_string($password_hash)."'";
		if($query_run=mysql_query($query))
		{
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0)
			{
				?><font color="red"><?php echo 'Invalid username/password combination';?> </font><?php
				$success=false;
			}
			else
			{
				$user_id=mysql_result($query_run,0,'id');
				$_SESSION['user_id']=$user_id;
				$success=true;
			}
		}
		else
		{
			$success=false;
		}
	}
}
if($success==true){
	header('Location:index.php');
}
else{

}
?>