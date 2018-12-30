<?php include('header.php') ?>
<!-- ************************************************************************************** -->
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
  		<div class="col-md-4">
  			<div class="panel panel-default">
  				<div class="panel-heading text-center">
    				<h3 class="panel-title ">Đăng nhập</h3>
  				</div>
  			<div class="panel-body">
				<form action="xulydangnhap.php" method="POST">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
				  </div>
				  <button type="submit" class="btn btn-default center-block">Login</button>
				</form>
		  	</div>
		</div>
  		</div>
  		<div class="col-md-4"></div>
	</div>
</div>
<!-- ************************************************************************************** -->
<?php include('footer.php') ?>