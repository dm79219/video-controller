<?php
require "constants.php";
if(!mysql_connect(DB_HOST,DB_USER,DB_PASS)||!mysql_select_db(DB_NAME))
{
	die('Error message');
}
?>