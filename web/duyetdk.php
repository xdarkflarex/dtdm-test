<?php
	include ('database.php');
	$idduyet = $_GET['iddk'];
	$sql = "select * from dangki,user where dangki.iduser = user.iduser and iddk = $idduyet";
	$result = mysqli_query($link,$sql);
?>
<?php include('header.php'); ?>
<!-- ************************************************************************************** -->
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Thông tin khách hàng đăng kí gói cáp quang.</h3>
  </div>
  <div class="panel-body">
	<table class="table table-bordered">
		<tr>
			<td>XÁC THỰC</td>
			<td>UPDATE</td>
		 </tr>
	<?php
	while($row3 = mysqli_fetch_assoc($result)){
		$iddk = $row3["iddk"];
		$xacthuc = $row3["xacthuc"];
		echo "<form action='updatedk.php?iddk=".$iddk."' method='POST'>";
		echo"<tr>
				<td><input type='text' name='xacthuc' value='".$xacthuc."'></td>
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