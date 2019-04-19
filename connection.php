<?php

$conn = mysqli_connect("localhost","root","","shivam") or die("Your server could not be connected!");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
	mysqli_select_db($conn, "shivam") or die("Your database could not be connected!");

?>

