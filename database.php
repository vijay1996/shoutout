<?php
//Connect to MySQL
$con = mysqli_connect("localhost", "root", "vijay","shoutout");

//Test the Connection
if(mysqli_connect_errno()){
	die("failed to connect to MySQL. " . mysqli_connect_error());
}
?>