<?php
	include ('database.php');
	$idsua = $_GET['idgc'];
	$sql = "select * from goicuoc where idgoicuoc = $idsua";
	$result = mysqli_query($link,$sqk);
?>
<?php include('header.php'); ?>
<!-- ************************************************************************************** -->
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Gói internet cáp quang.</h3>
  </div>
  <div class="panel-body">
	<table class="table table-bordered">
		<tr>
			<td>TÊN GÓI CƯỚC</td>
			<td>GIÁ</td>
			<td>BĂNG THÔNG</td>
			<td>THỜI GIAN</td>
			<td>UPDATE</td>
		 </tr>
	<?php
	while($kq = mysqli_fetch_assoc($result)){
		$idgc = $kq["idgoicuoc"];
		$ten = $kq["tengoicuoc"];
		$gia = $kq["gia"];
		$bangthong = $kq["bangthong"];
		$thoigian = $kq["thoigian"];
		echo "<form action='updategc.php?idgc=".$idgc."' method='POST'>";
		echo"<tr>
				<td><input type='text' name='ten' value='".$ten."'></td>
				<td><input type='text' name='gia' value='".$gia."'></td>
				<td><input type='text' name='bangthong' value='".$bangthong."'></td>
				<td><input type='text' name='thoigian' value='".$thoigian."'></td>
				<td><input type='submit' value='Update'></td>
			</tr>";
		echo "</form>";
	}
	echo "</table>";
	?>
  </div>
</div>
</div>
<!-- ************************************************************************************** -->
<?php include('footer.php'); ?>