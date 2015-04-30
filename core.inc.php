
<?php
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];
@$http_referer=$_SERVER['HTTP_REFERER'];
$value=false;
function loggedin()
{
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
	{
		return true;
	}
	return false;
}

function getuserfield($field)
{
	$query="SELECT `$field` FROM user WHERE id='".$_SESSION['user_id']."'";
	if($query_run=mysql_query($query))
	{
		if($query_result=mysql_result($query_run,0,$field))
		{
			return $query_result;
		}
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>