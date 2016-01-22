<?php
include_once 'dbconnect.php';
	if($_POST['uname']!=null && $_POST['email']!=null && $_POST['pass']!=null)
	{
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$upass = md5($_POST['pass']);
		$conn = new mysqli("localhost", "root","sai123", "dbtest");
		if(mysql_query("INSERT INTO users(user_name,user_email,user_pass) VALUES('$uname','$email','$upass')"))
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
				
			header("location:index.php");
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
			}		
		}
	else
	{
		?>
		<script>alert('please enter full details');</script>
			
			<?php
	}
?>
