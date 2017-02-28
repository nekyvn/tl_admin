<?php
/* Smarty version 3.1.31-dev/47, created on 2017-02-27 11:33:17
  from "/Applications/MAMP/htdocs/tl_admin/template/tpl/product/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/47',
  'unifunc' => 'content_58b3ac0dbbc011_40420492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '158afe6c322f61f27cebc39f9ebd2c393710f09d' => 
    array (
      0 => '/Applications/MAMP/htdocs/tl_admin/template/tpl/product/add.tpl',
      1 => 1488169996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b3ac0dbbc011_40420492 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<ol class="breadcrumb">
		<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li><a href="index.php?mode=product"><svg class="glyph stroked camera"><use xlink:href="#stroked-camera"></use></svg> Sản Phẩm</a></li>
		<li class="active">Thêm Sản Phẩm Mới</li>
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
	Thêm sản phẩm mới thành công 
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
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#import_file">
  	<i class="fa fa-plus"></i> Import từ file excel
</button>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">Thêm sản phẩm mới</div>
			<div class="panel-body">
				<form action="index.php?mode=product&act=add" role="form" method="post">
					<div class="form-group">
						<label>Mã sản phẩm</label>
						<input type="text" name="mhh" id="name" class="form-control">
					</div>
					<div class="form-group">
						<label>Tên sản phẩm</label>
						<input type="text" name="ten" class="form-control">
					</div>
					<div class="form-group">
						<label>Giá nhập</label>
						<input type="text" name="gianhap" class="form-control">
					</div>
					<div class="form-group">
						<label>Giá xuất</label>
						<input type="text" name="giaxuat" class="form-control">
					</div>
					<div class="form-group">
						<label>Số lượng</label>
						<input type="text" name="soluong" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Add">
						<input type="reset" value="Reset" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="import_file">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nhập hàng hoá từ file excel</h4>
            </div>
            <div class="modal-body">
                <form action="index.php?mode=product&act=import" method="post" enctype="multipart/form-data">
                	<div class="form-group">
                		<label>Chọn file:</label>
                		<input type="file" name="xls">
                	</div>
                	<input type="submit" name="submit" value="Upload" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal --><?php }
}
