<?php
session_start();
include_once('connect.php');
if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$reserr = die(mysqli_error($link));
	$sql = "select * from users where username='" . $username . "' and password='" . $password . "' limit 1";
	$res = mysqli_query($sql, $reserr); //or die(mysqli_error());


	if (mysqli_num_rows($res) == 1) {

		$row = mysqli_fetch_assoc($res);
		$_SESSION['uid'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		header('location:index.php');
		exit();
	} else {
		echo "Invalid  login information.please reuturn to previous page";
		exit();
	}
}
