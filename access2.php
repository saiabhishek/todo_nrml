<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'sai123';
$dbName = 'tododb';
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn){
   $create_db="CREATE DATABASE tododb";
   mysqli_query($conn,$create_db);
}
?>
# todo_nrml action2.php add.php add2.php css2.css dbconnect.php display.php edit.php index.php logout.php register.php style.css val.js
