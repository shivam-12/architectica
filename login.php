<?php
function log_in()
{
		include_once('connection.php');
		$email= $_POST['email'];
		$pass = $_POST['pass'];
		$res = mysqli_query($conn, "Select password from shivam where email='$email'");
		$row=mysqli_fetch_row($res);
		if(($row[0]!=$pass) || ($row[0]==""))
		{
			header('Location: invalid.html');
		}
		else if($row[0]==$pass)
		{
			header('Location: https://www.klook.com/en-IN/');
		}
		else
			echo mysqli_error();
	
}

function register()
{
		include_once('connection.php');
		$email= $_POST['email'];
		$pass = $_POST['pass'];
		if(mysqli_query($conn, "INSERT INTO `shivam` (`email`,`password`) VALUES ('$email','$pass')"))
		{
			header('Location: login.html');
		}
		else
			echo mysqli_error();
} 


if(isset($_POST['login']))
{
	
	log_in();
}

if(isset($_POST['submit']))
{	
	register();
}
?>


