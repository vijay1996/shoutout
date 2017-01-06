<?php 
	include 'database.php';

	$error = null;

	if(isset($_POST['submit'])){
		
		$user = mysqli_real_escape_string($con, $_POST['user']);
		$message = mysqli_real_escape_string($con, $_POST['message']);

		//set timezone
		date_default_timezone_set('asia/kolkata');

		$time = mysqli_real_escape_string($con, date('d-m-Y') . ' - ' . date('h:i:s'));

		if($user != '' && $message != ''){

			$query = "INSERT INTO shouts (Time, User, Message) VALUES ('$time', '$user', '$message');";

			if(mysqli_query($con, $query) == null){
				die('Error: ' . mysqli_error($con));
			}
			else{
				header('Location: index.php');
				exit();
			}
		}
		else{	
			$error = 1;
			header('Location: index.php');
		}
		

	}
 ?>