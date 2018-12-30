<?php
	include ('database.php');
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$sql = "select * from admin where email = '$email' and pass = '$pass' ";
	$result = mysqli_query($link,$sql);

	$row = mysqli_fetch_assoc($result);
	if (($email == $row["email"]) && ($pass ==$row["pass"])){
		header("location: admin.php");
	}
	else{
		header("location: login.php");
	}
?>