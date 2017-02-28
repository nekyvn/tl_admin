<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JKPhoto - Login</title>

<link href="template/css/bootstrap.min.css" rel="stylesheet">
<link href="template/css/datepicker3.css" rel="stylesheet">
<link href="template/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="login.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" name = "submit" class="btn btn-primary" value="Login">
						</fieldset>
					</form>
				</div>
			</div>
			<h5 style="text-align:center">JKPhoto - Copyright &copy; 2016 by Trung Nguyen</h5>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="template/js/jquery-1.11.1.min.js"></script>
	<script src="template/js/bootstrap.min.js"></script>
	
</body>

</html>
