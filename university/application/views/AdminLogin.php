<html>
	<head>
		<link href="<?php echo base_url();?>asset/css/bootstrap.css" rel="stylesheet">
	</head>
	<body style="background: #000000;color:white;">
		<form action="checkpwd" >
		<div class="container">
			<br><br><br><br><br><br><br><br><br><br>
			<div class="col-md-4 col-md-offset-4">
				<div class="row">
					<div class="col-md-12">
						<h1>Admin Login</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						User Id :
					</div>
					<div class="col-md-6">
						<input type="text" class="form-control" name="aid" id="aid"/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						User Password :
					</div>
					<div class="col-md-6">
						<input type="password" class="form-control" name="pwd" id="pwd"/>
					</div>
				</div>
				<div class="row">	
					<div class="col-md-12">
						<input type="submit" class="pull-right btn btn-danger"/>
					</div>
				</div>
			</div>
		</div>
		</form>
	</body>
	<?php echo $msg ; ?>
</html>