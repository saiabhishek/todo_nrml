<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","root","sai123"))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbtest"))
{
	die('oops database selection problem ! --> '.mysql_error());
}
else
{
	$conn=mysqli_connect("localhost","root","sai123","dbtest");
}

?>