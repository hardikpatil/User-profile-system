<?php
session_start();
include('../database.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

	if (!$row = mysqli_fetch_assoc($result)) {
		echo "Sorry, Your username or password is incorrect. Please Try again!";
	} else {
		//echo "You are logged in!";
		$_SESSION['user_id'] = $row['user_id'];
	}
	header("Location: ../index.php");


?>