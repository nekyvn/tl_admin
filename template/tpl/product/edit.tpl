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
{if $success eq 'true'}
<div class="alert bg-success">
	<svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>
	Cập nhật sản phẩm thành công 
	<a class="pull-right" href="#">
		<span class="glyphicon glyphicon-remove"></span>
	</a>
</div>
{elseif $error neq ''}
<div class="alert bg-danger">
	<svg class="glyph stroked checkmark"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-checkmark"></use></svg>
	{$error} 
	<a class="pull-right" href="#">
		<span class="glyphicon glyphicon-remove"></span>
	</a>
</div>
{/if}
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">Cập nhật sản phẩm</div>
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