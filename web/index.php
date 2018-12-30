<?php
	include ('database.php');
	$sql = "select * from goicuoc";
	$result = mysqli_query($link,$sql);
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
			<td>GIÁ / THÁNG</td>
			<td>BĂNG THÔNG</td>
			<td>THỜI GIAN</td>
			<td>ĐĂNG KÍ</td>
		 </tr>
	<?php
	while($row = mysqli_fetch_assoc($result)){
		$idgc = $row["idgoicuoc"];
		$ten = $row["tengoicuoc"];
		$gia = $row["gia"];
		$bangthong = $row["bangthong"];
		$thoigian = $row["thoigian"];
		echo"<tr>
				<td>".$ten."</td>
				<td>".$gia."</td>
				<td>".$bangthong."</td>
				<td>".$thoigian."</td>
				<td><a href='dangki.php?idgc=".$idgc."'>Đăng kí</a></td>
			</tr>";
	}
	echo "</table>";
	?>
  </div>
</div>
</div>
<!-- ************************************************************************************** -->
<?php include('footer.php') ?>