<?php
	include ('database.php');
	$ten = $_POST['ten'];
	$gia = $_POST['gia'];
	$bangthong = $_POST['bangthong'];
	$thoigian = $_POST['thoigian'];

	$sql = "insert into goicuoc (tengoicuoc,gia,bangthong,thoigian) values ('$ten','$gia','$bangthong','$thoigian')";
	mysqli_query($link,$sql);
	header('location: admin.php');
?>