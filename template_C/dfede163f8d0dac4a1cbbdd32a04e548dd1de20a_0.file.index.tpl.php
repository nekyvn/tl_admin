<?php
/* Smarty version 3.1.31-dev/47, created on 2017-02-28 12:45:43
  from "/Applications/MAMP/htdocs/tl_admin/template/tpl/product/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/47',
  'unifunc' => 'content_58b50e878754e1_20565767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfede163f8d0dac4a1cbbdd32a04e548dd1de20a' => 
    array (
      0 => '/Applications/MAMP/htdocs/tl_admin/template/tpl/product/index.tpl',
      1 => 1488260742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b50e878754e1_20565767 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<ol class="breadcrumb">
		<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
		<li class="active">Quản Lý Hàng Hoá</li>
	</ol>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Hàng Hoá</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
				Danh Sách Hàng Hoá 
				<a href="index.php?mode=product&act=add" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm Hàng Hoá</a>

			</div>
			<div class="panel-body">
				<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
				    <thead>
				    <tr>
				        <th data-field="id" data-sortable="true">Mã HH</th>
				        <th data-field="name">Tên HH</th>
				        <th data-field="gia_nhap" data-sortable="true">Giá Nhập</th>
				        <th data-field="gia_xuat" data-sortable="true">Giá Xuất</th>
				        <th data-field="soluong" data-sortable="true">Số Lượng</th>
				        <th>Actions</th>
				    </tr>
				    </thead>
				    <tbody>
				    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lHH']->value, 'iHH');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['iHH']->value) {
?>
				    	<tr>
				    		<td><?php echo $_smarty_tpl->tpl_vars['iHH']->value['id'];?>
</td>
					    	<td>
					    		<?php echo $_smarty_tpl->tpl_vars['iHH']->value['ten'];?>

					    	</td>
					    	<td><?php echo $_smarty_tpl->tpl_vars['iHH']->value['gia_nhap'];?>
</td>
					    	<td><?php echo $_smarty_tpl->tpl_vars['iHH']->value['gia_xuat'];?>
</td>
					    	<td><?php echo $_smarty_tpl->tpl_vars['iHH']->value['soluong'];?>
</td>
					    	<td>
					    		<a href="index.php?mode=product&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['iHH']->value['id'];?>
"><i class="fa fa-edit fa-2x"></i></a>&nbsp;
					    		<a href="index.php?mode=product&act=delete&id=<?php echo $_smarty_tpl->tpl_vars['iHH']->value['id'];?>
"><i class="fa fa-remove fa-2x"></i></a>
					    	</td>
				    	</tr>
				    	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div><!--/.row-->	<?php }
}
