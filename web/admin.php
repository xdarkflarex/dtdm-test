<?php
	include ('database.php');
	$sql2 = "select * from goicuoc";
	$result2 = mysqli_query($link,$sql2);
	$sql3 = "select * from dangki,goicuoc,user where dangki.idgoicuoc = goicuoc.idgoicuoc and dangki.iduser = user.iduser and xacthuc = 'n'";
	$result3 = mysqli_query($link,$sql3);
	$sql4 = "select * from dangki,goicuoc,user where dangki.idgoicuoc = goicuoc.idgoicuoc and dangki.iduser = user.iduser and xacthuc = 'y'";
	$result4 = mysqli_query($link,$sql4);

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
			<td>SỬA</td>
			<td>XÓA</td>
			<td><a href='themgc.php'>THÊM</a></td>
		 </tr>
	<?php
	while($row2 = mysqli_fetch_assoc($result2)){
		$idgc = $row2["idgoicuoc"];
		$ten = $row2["tengoicuoc"];
		$gia = $row2["gia"];
		$bangthong = $row2["bangthong"];
		$thoigian = $row2["thoigian"];
		echo"<tr>
				<td>".$ten."</td>
				<td>".$gia."</td>
				<td>".$bangthong."</td>
				<td>".$thoigian."</td>
				<td><a href='suagc.php?idgc=".$idgc."'>Sửa</a></td>
				<td><a href='xoagc.php?idgc=".$idgc."'>Xóa</a></td>
			</tr>";
	}
	echo "</table>";
	?>
  </div>
</div>
</div>
<!-- ************************************************************************************** -->
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Thông tin khách hàng đăng kí gói cáp quang.</h3>
  </div>
  <div class="panel-body">
	<table class="table table-bordered">
		<tr>
			<td>TÊN GÓI CƯỚC</td>
			<td>GIÁ / THÁNG</td>
			<td>BĂNG THÔNG</td>
			<td>THỜI GIAN</td>
			<td>TÊN KHÁCH HÀNG</td>
			<td>GIỚI TÍNH</td>
			<td>SỐ ĐIỆN THOẠI</td>
			<td>EMAIL</td>
			<td>ĐỊA CHỈ</td>
			<td>THỜI GIAN ĐĂNG KÍ</td>
			<td>XÁC THỰC</td>
			<td>DUYỆT</td>
		 </tr>
	<?php
	while($row3 = mysqli_fetch_assoc($result3)){
		$iddk = $row3["iddk"];
		$tengc = $row3["tengoicuoc"];
		$gia = $row3["gia"];
		$bangthong = $row3["bangthong"];
		$thoigian = $row3["thoigian"];
		$tenuser = $row3["tenuser"];
		$gioitinh = $row3["gioitinh"];
		$sdt = $row3["sdt"];
		$email = $row3["email"];
		$diachi = $row3["diachi"];
		$thoigiandk = $row3["thoigiandk"];
		$xacthuc = $row3["xacthuc"];
		echo"<tr>
				<td>".$tengc."</td>
				<td>".$gia."</td>
				<td>".$bangthong."</td>
				<td>".$thoigian."</td>
				<td>".$tenuser."</td>
				<td>".$gioitinh."</td>
				<td>".$sdt."</td>
				<td>".$email."</td>
				<td>".$diachi."</td>
				<td>".$thoigiandk."</td>
				<td>".$xacthuc."</td>
				<td><a href='duyetdk.php?iddk=".$iddk."'>Duyệt</a></td>
			</tr>";
	}
	echo "</table>";
	?>
  </div>
</div>
</div>
<!-- ************************************************************************************** -->
<div class="container">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Thông tin khách hàng đang sử dụng gói cáp quang.</h3>
  </div>
  <div class="panel-body">
	<table class="table table-bordered">
		<tr>
			<td>TÊN GÓI CƯỚC</td>
			<td>GIÁ / THÁNG</td>
			<td>BĂNG THÔNG</td>
			<td>THỜI GIAN</td>
			<td>TÊN KHÁCH HÀNG</td>
			<td>GIỚI TÍNH</td>
			<td>SỐ ĐIỆN THOẠI</td>
			<td>EMAIL</td>
			<td>ĐỊA CHỈ</td>
			<td>THỜI GIAN ĐĂNG KÍ</td>
			<td>XÁC THỰC</td>
		 </tr>
	<?php
	while($row4 = mysqli_fetch_assoc($result4)){
		$tengc = $row4["tengoicuoc"];
		$gia = $row4["gia"];
		$bangthong = $row4["bangthong"];
		$thoigian = $row4["thoigian"];
		$tenuser = $row4["tenuser"];
		$gioitinh = $row4["gioitinh"];
		$sdt = $row4["sdt"];
		$email = $row4["email"];
		$diachi = $row4["diachi"];
		$thoigiandk = $row4["thoigiandk"];
		$xacthuc = $row4["xacthuc"];
		echo"<tr>
				<td>".$tengc."</td>
				<td>".$gia."</td>
				<td>".$bangthong."</td>
				<td>".$thoigian."</td>
				<td>".$tenuser."</td>
				<td>".$gioitinh."</td>
				<td>".$sdt."</td>
				<td>".$email."</td>
				<td>".$diachi."</td>
				<td>".$thoigiandk."</td>
				<td>".$xacthuc."</td>
			</tr>";
	}
	echo "</table>";
	?>
  </div>
</div>
</div>
<!-- ************************************************************************************** -->
<?php include('footer.php') ?>