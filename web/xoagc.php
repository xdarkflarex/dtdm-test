<?php
	include ('database.php');
	$idxoa = $_GET['idgc'];
	$sql = "delete from goicuoc where idgoicuoc = $idxoa";
	mysql_query($link,$sql);
	header('location: admin.php');
?>