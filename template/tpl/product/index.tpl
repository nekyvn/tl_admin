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
				    	{foreach $lHH as $iHH}
				    	<tr>
				    		<td>{$iHH.id}</td>
					    	<td>
					    		{$iHH.ten}
					    	</td>
					    	<td>{$iHH.gia_nhap}</td>
					    	<td>{$iHH.gia_xuat}</td>
					    	<td>{$iHH.soluong}</td>
					    	<td>
					    		<a href="index.php?mode=product&act=edit&id={$iHH.id}"><i class="fa fa-edit fa-2x"></i></a>&nbsp;
					    		<a href="index.php?mode=product&act=delete&id={$iHH.id}"><i class="fa fa-remove fa-2x"></i></a>
					    	</td>
				    	</tr>
				    	{/foreach}
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div><!--/.row-->	