<?php
	include ('database.php');
	$iddk = $_GET['idgc'];
	$sql = "select * from goicuoc where idgoicuoc = $iddk";
	$result = mysqli_query($link,$sql);
?>
<?php include('header.php') ?>
<!-- ************************************************************************************** -->
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
  		<div class="col-md-4">
	<div class="panel panel-default">
  		<div class="panel-heading text-center">
    		<h3 class="panel-title ">Đăng kí</h3>
  		</div>
  			<div class="panel-body">
		  	<?php
			while($kq = mysqli_fetch_assoc($result)){
				$idgc = $kq["idgoicuoc"];
				$ten = $kq["tengoicuoc"];
				$gia = $kq["gia"];
				$bangthong = $kq["bangthong"];
				$thoigian = $kq["thoigian"];
				echo "<form action='dangkithanhcong.php?idgc=".$idgc."' method='POST'>";
				echo "
						<input type='hidden' name='iddk' value='".$idgc."'>
						<div class='form-group'>
				    		<label>Tên gói cước</label>
				    		<input type='text' name='tengc' class='form-control' value='".$ten."' required>
				  		</div>
				  		<div class='form-group'>
				    		<label>Giá</label>
				    		<input type='text' name='gia' class='form-control' value='".$gia."' required>
				  		</div>
				  		<div class='form-group'>
				    		<label>Băng thông</label>
				    		<input type='text' name='bangthong' class='form-control' value='".$bangthong."' required>
				  		</div>
				  		<div class='form-group'>
				    		<label>Thời gian</label>
				    		<input type='text' name='thoigian' class='form-control' value='".$thoigian."' required>
				  		</div>
				  		<div class='form-group'>
				    		<label>Tên khách hàng</label>
				    		<input type='text' name='tenuser' class='form-control' required>
				  		</div>
				  		<div class='form-group'>
				    		<label>Giới tính</label>
				    		<input type='text' name='gioitinh' class='form-control' required>
				  		</div>
				  		<div class='form-group'>
				    		<label>Số điện thoại</label>
				    		<input type='text' name='sdt' class='form-control' required>
				  		</div>
				  		<div class='form-group'>
				    		<label>Địa chỉ</label>
				    		<input type='text' name='diachi' class='form-control' required>
				  		</div>
				  		<div class='form-group'>
				    		<label for='exampleInputEmail1'>Email</label>
				    		<input type='email' name='email' class='form-control' id='exampleInputEmail1' placeholder='Email' required>
				  		</div>
				  		<div class='form-group'>
				    		<label>Thời gian bắt đầu sử dụng</label>
				    		<input type='text' name='thoigiandk' class='form-control' required>
				  		</div>
				  		<input type='hidden' name='xacthuc' value='n'>
				  		<button type='submit' class='btn btn-default center-block'>Ok</button> ";
				echo "</form>";
			}
			?>
			</div>
			</div>
  		<div class="col-md-4"></div>
	</div>
</div>
<!-- ************************************************************************************** -->
<?php include('footer.php') ?>