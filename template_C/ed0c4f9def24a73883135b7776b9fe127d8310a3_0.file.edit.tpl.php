<?php
/* Smarty version 3.1.31-dev/47, created on 2017-02-28 12:56:25
  from "/Applications/MAMP/htdocs/tl_admin/template/tpl/product/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/47',
  'unifunc' => 'content_58b51109cd85b2_91351859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed0c4f9def24a73883135b7776b9fe127d8310a3' => 
    array (
      0 => '/Applications/MAMP/htdocs/tl_admin/template/tpl/product/edit.tpl',
      1 => 1488261381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b51109cd85b2_91351859 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<ol class="breadcrumb">
		<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li><a href="index.php?mode=product"><svg class="glyph stroked camera"><use xlink:href="#stroked-camera"></use></svg> Sản Phẩm</a></li>
		<li class="active">Cập Nhật Sản Phẩm Mới</li>
	</ol>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Sản Phẩm</h1>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['success']->value == 'true') {?>
<div class="alert bg-success">
	<svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>
	Cập nhật sản phẩm thành công 
	<a class="pull-right" href="#">
		<span class="glyphicon glyphicon-remove"></span>
	</a>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['error']->value != '') {?>
<div class="alert bg-danger">
	<svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 
	<a class="pull-right" href="#">
		<span class="glyphicon glyphicon-remove"></span>
	</a>
</div>
<?php }?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">Cập nhật sản phẩm</div>
			<div class="panel-body">
				<form action="index.php?mode=product&act=edit&$id=<?php echo $_smarty_tpl->tpl_vars['infoHH']->value['id'];?>
" role="form" method="post">
					<div class="form-group">
						<label>Mã sản phẩm</label>
						<input type="text" name="mhh" id="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['infoHH']->value['id'];?>
">
					</div>
					<div class="form-group">
						<label>Tên sản phẩm</label>
						<input type="text" name="ten" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['infoHH']->value['ten'];?>
">
					</div>
					<div class="form-group">
						<label>Giá nhập</label>
						<input type="text" name="gianhap" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['infoHH']->value['gia_nhap'];?>
">
					</div>
					<div class="form-group">
						<label>Giá xuất</label>
						<input type="text" name="giaxuat" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['infoHH']->value['gia_xuat'];?>
">
					</div>
					<div class="form-group">
						<label>Số lượng</label>
						<input type="text" name="soluong" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['infoHH']->value['soluong'];?>
">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Cập nhật">
						<input type="reset" value="Reset" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div>
	</div>
</div><?php }
}
