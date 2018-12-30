<?php
	include ('database.php');
	$idgc = $_GET['idgc'];
	$ten = $_POST['ten'];
	$gia = $_POST['gia'];
	$bangthong = $_POST['bangthong'];
	$thoigian = $_POST['thoigian'];

	$sql = "update goicuoc set tengoicuoc = '$ten', gia = '$gia', bangthong = '$bangthong', thoigian = '$thoigian' where idgoicuoc = '$idgc' ";
	$result = mysqli_query($link,$sql);
	header('location: admin.php');
?>