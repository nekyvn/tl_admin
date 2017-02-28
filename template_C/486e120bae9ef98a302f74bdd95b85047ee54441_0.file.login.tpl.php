<?php
/* Smarty version 3.1.31-dev/47, created on 2017-02-15 12:00:50
  from "/Applications/MAMP/htdocs/tl_admin/template/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/47',
  'unifunc' => 'content_58a3e0822d2666_08784260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '486e120bae9ef98a302f74bdd95b85047ee54441' => 
    array (
      0 => '/Applications/MAMP/htdocs/tl_admin/template/login.tpl',
      1 => 1480920744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a3e0822d2666_08784260 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
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
	
		

	<?php echo '<script'; ?>
 src="template/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="template/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	
</body>

</html>
<?php }
}
