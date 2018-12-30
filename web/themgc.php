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
			<td>THÊM</td>
		 </tr>
		<form action='insertgc.php' method='POST'>
		  <tr>
			<td><input type='text' name='ten' required></td>
			<td><input type='text' name='gia' required></td>
			<td><input type='text' name='bangthong' required></td>
			<td><input type='text' name='thoigian' required></td>
			<td><input type='submit' value='Thêm'></td>
		  </tr>
		</form>
	</table>
  </div>
</div>
</div>
<!-- ************************************************************************************** -->
<?php include('footer.php'); ?>