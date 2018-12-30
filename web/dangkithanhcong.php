<?php
	include ('database.php');
	$idgc = $_GET['idgc'];
	$tenuser = filter_input(INPUT_POST, 'tenuser');
	$gioitinh = filter_input(INPUT_POST, 'gioitinh');
	$sdt = filter_input(INPUT_POST, 'sdt');
	$email = filter_input(INPUT_POST, 'email');
	$diachi = filter_input(INPUT_POST, 'diachi');
	$thoigiandk = filter_input(INPUT_POST, 'thoigiandk');
	$xacthuc = filter_input(INPUT_POST, 'xacthuc');

	$sql = "insert into user (tenuser,gioitinh,sdt,email,diachi) values ('$tenuser','$gioitinh','$sdt','$email','$diachi')";
	mysql_query($link,$sql);

	$sql3 = "select * from user where tenuser = '$tenuser'";
	$result = mysqli_query($link,$sql3);
	while($row2 = mysqli_fetch_assoc($result)){
		$id = $row2['iduser'];
	}

	$sql2 = "insert into dangki (iduser,idgoicuoc,thoigiandk,xacthuc) values ($id,$idgc,'$thoigiandk','$xacthuc')";
	mysqli_query($link,$sql2);
?>
<?php include'header.php'; ?>
<!-- ************************************************************************************** -->
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
  		<div class="col-md-4">
  			<div class="panel panel-default">
  				<div class="panel-heading text-center">
    				<h3 class="panel-title ">Thông báo</h3>
  				</div>
				<div class="panel-body text-center">
				   <h3 style="color: red;">Đăng kí thành công !</h3>
				   <h3 style="color: red;"><a href="index.php">Quay về Trang chủ</a></h3>
				</div>
			</div>
  		</div>
  		<div class="col-md-4"></div>
	</div>
</div>
<!-- ************************************************************************************** -->
<?php include'footer.php'; ?>