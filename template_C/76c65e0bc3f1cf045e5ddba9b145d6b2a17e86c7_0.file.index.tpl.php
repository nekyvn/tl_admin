<?php
/* Smarty version 3.1.31-dev/47, created on 2017-02-27 10:45:31
  from "/Applications/MAMP/htdocs/tl_admin/template/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/47',
  'unifunc' => 'content_58b3a0dbae14e4_39910402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c65e0bc3f1cf045e5ddba9b145d6b2a17e86c7' => 
    array (
      0 => '/Applications/MAMP/htdocs/tl_admin/template/index.tpl',
      1 => 1488167131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b3a0dbae14e4_39910402 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>JKPhoto - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

<link href="template/css/bootstrap.min.css" rel="stylesheet">
<link href="template/css/datepicker3.css" rel="stylesheet">
<link href="template/css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="template/css/font-awesome.min.css">
<!--Icons-->
<?php echo '<script'; ?>
 src="template/js/lumino.glyphs.js"><?php echo '</script'; ?>
>

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
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Tiến Lộc Construction</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_smarty_tpl->tpl_vars['admin_info']->value['username'];?>
 <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!-- <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
							<li><a href="login.php?act=logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Trang Chủ</a></li>
			<li>
				<a href="index.php?mode=product"><i class="fa fa-cubes fa-1x"></i> Quản Lý Hàng Hóa</a>
			</li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#about-us-child"><svg class="glyph stroked notepad"><use xlink:href="#stroked-notepad"></use></svg></span> Giới Thiệu
				</a>
				<ul class="children collapse" id="about-us-child">
					<li>
						<a href="index.php?mode=about-us&act=content"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg> Nội Dung</a>
					</li>
					<li>
						<a href="index.php?mode=about-us&act=team">
							<svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg> Team
						</a>
					</li>
				</ul>
			</li>
			<li><a href="index.php?mode=service"><svg class="glyph stroked film"><use xlink:href="#stroked-film"></use></svg> Dịch Vụ</a></li>
			
			<li><a href="index.php?mode=khuyen-mai"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Khuyến Mãi</a></li>
			<li><a href="index.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Liên Hệ</a></li>
			
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	</div>	<!--/.main-->
	
	<?php echo '<script'; ?>
 src="template/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="template/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="template/js/bootstrap-table.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="template/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	<?php echo '</script'; ?>
>	
</body>

</html>
<?php }
}
