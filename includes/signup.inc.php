<?php

include('../database.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uid = $_POST['uid'];
$pass = $_POST['pass'];
$email_id = $_POST['email_id'];

if (empty($fname) || empty($lname) || empty($uid) || empty($pass) || empty($email_id)) {
	header("Location: ../signup.php?error=empty"); 
 	exit();
}

else {
		
	$sql = "SELECT user_id FROM users WHERE user_id='$uid' ";
	$result = mysqli_query($conn, $sql);
	$uidcheck = mysqli_num_rows($result); //num_rows return either 1(if we have a result) or 0(if we don't) based on resulted data already exists or not.

	if ($uidcheck > 0) { 
		header("Location: ../signup.php?error=username");
		echo ""; //error msg and send it back to sign-up page 
		exit();
	}
	else {

		$sql = "INSERT INTO users(first_name, last_name, username, password, email) VALUES ('$fname', '$lname', '$uid', '$pass', '$email_id')";
		$result = mysqli_query($conn, $sql);
		header("Location: ../index.php");
	}
}


?>