<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
include_once('dbconnect.php');
if(isset($_POST['delete_multi']))
{
    $idArr = $_POST['checked_id'];
    foreach($idArr as $id)
    {
        mysqli_query($conn,"DELETE FROM todomain WHERE id=".$id);
    }
    header("Location:display.php");
}
?> 
