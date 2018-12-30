<?php
	include ('database.php');
	$iddk = $_GET["iddk"];
	$xacthuc = $_POST["xacthuc"];

	$sql = "update dangki set xacthuc = 'y' where iddk = '$iddk' ";
	$result = mysqli_query($link,$sql);
	header('location: admin.php');
?>