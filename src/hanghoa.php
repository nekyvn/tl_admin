<?php
include './library/doc/Classes/PHPExcel/IOFactory.php';
function addHanghoa($id, $ten, $gia_nhap, $gia_xuat, $soluong = 0){
	global $db;
	$sql = "INSERT INTO hanghoa(id, ten, gia_nhap, gia_xuat, soluong) VALUES(:id, :ten, :gia_nhap, :gia_xuat, :soluong)";
	$stmt = $db->prepare($sql);
	$data = array(
			'id' => $id,
			'ten' => $ten,
			'gia_nhap' => $gia_nhap,
			'gia_xuat' => $gia_xuat,
			'soluong' => $soluong,
		);
	return $stmt->execute($data);
}
function editHanghoa($id, $new_id, $ten, $gia_nhap, $gia_xuat, $soluong){
	global $db;
	$sql = "UPDATE hanghoa SET id = :id, ten = :ten, gia_nhap = :gia_nhap, gia_xuat = :gia_xuat, soluong = :soluong WHERE id = :id";
	$data = array(
			'id' => $id,
			'ten' => $ten,
			'gia_nhap' => $gia_nhap,
			'gia_xuat' => $gia_xuat,
			'soluong' => $soluong,
		);
	return $stmt->execute($data);
}
function deleteHanghoa($id){
	global $db;
	$sql = "DELETE FROM hanghoa WHERE id = :id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array('id' => $id));
}
function listHanghoa(){
	global $db;
	$sql = "SELECT * FROM hanghoa";
	$stmt = $db->prepare($sql);
	$result = $stmt->execute();
	return $result->fetch(PDO::FETCH_ASSOC);
}
function infoHanghoa($id){
	global $db;
	$sql = "SELECT * FROM hanghoa WHERE id = :id";
	$stmt = $db->prepare($sql);
	$result = $stmt->execute(array('id' => $id));
	return $result->fetch(PDO::FETCH_ASSOC);
}
function checkMaHH($id, $current_id = null){
	global $db;
	$data = null;
	if($current_id === null){
		$sql = "SELECT COUNT(*) AS total FROM hanghoa WHERE id = :id";
		$data = array('id' => $id);
	} else {
		$sql = "SELECT COUNT(*) AS total FROM hanghoa WHERE id = :id AND id NOT = :current_id";
		$data = array('id' => $id, 'current_id' => $current_id);
	}
	$stmt = $db->prepare($sql);
	$stmt->execute($data);
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	if($result['total'] > 0)
		return false;
	else return true;
}
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
switch($act){
	case 'add':
		$tpl->assign('success', "");
		$tpl->assign('error', '');
		if(isset($_POST['submit'])){
			$mhh = trim(strtoupper($_POST['mhh']));
			$ten = trim($_POST['ten']);
			$gianhap = (int)$_POST['gianhap'];
			$giaxuat = (int)$_POST['giaxuat'];
			$soluong = (int)$_POST['soluong'];
			if(checkMaHH($mhh)){
				if(addHanghoa($mhh, $ten, $gianhap, $giaxuat, $soluong))
					$tpl->assign('success', true);	
				else $tpl->assign('error', "Có lỗi, vui lòng thử lại");
			} else $tpl->assign('error', "Mã sản phẩm đã có trong cơ sở dữ liệu");
		}
		$tpl->assign('title', 'Thêm sản phẩm');
		$tpl->assign('template', 'tpl/product/add.tpl');
	break;
	case 'edit':
		if(isset($_GET['id'])){
			$product_info = infoHanghoa($id);
			$tpl->assign('success', "");
			$tpl->assign('error', '');
			if(isset($_POST['submit'])){
				$mhh = trim(strtoupper($_POST['mhh']));
				$ten = trim($_POST['ten']);
				$gianhap = (int)$_POST['gianhap'];
				$giaxuat = (int)$_POST['giaxuat'];
				$soluong = (int)$_POST['soluong'];
				if(checkMaHH($mhh)){
					if(editHanghoa($mhh, $ten, $gianhap, $giaxuat, $soluong))
						$tpl->assign('success', true);	
					else $tpl->assign('error', "Có lỗi, vui lòng thử lại");
				} else $tpl->assign('error', "Mã sản phẩm đã có trong cơ sở dữ liệu");
			}
			$tpl->assign('title', 'Cập nhật sản phẩm');
			$tpl->assign('template', 'tpl/product/edit.tpl');
		} else {
			header("Location: index.php?mode=product");
		}
	break;
	case 'delete':
		if(isset($_GET['id'])){
			@deleteHanghoa((int)$_GET['id']);
			header("Location: index.php?mode=product");
		} else{
			header("Location: index.php?mode=product");
		}
	break;
	case 'import':
		if(isset($_FILES['xls']['name'])){
			$filename = 'files/' . basename($_FILES['xls']['name']);
			move_uploaded_file($_FILES['xls']['tmp_name'], $filename);
			$inputFileType = 'Excel5';
			$inputFileName = $filename;
			/**  Create a new Reader of the type defined in $inputFileType  **/
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			/**  Load $inputFileName to a PHPExcel Object  **/
			$objPHPExcel = $objReader->load($inputFileName);
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objReader->setReadDataOnly(true);
			$objPHPExcel = $objReader->load($inputFileName);
			$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
			$row = count($sheetData);
			for($i = 2; $i <= $row; $i++){
				addHanghoa($sheetData[$i]['A'], $sheetData[$i]['B'], $sheetData[$i]['C'], 0);
			}
			unlink($filename);
		}
		$tpl->assign('template', 'tpl/product/import.tpl');
	break;
}
?>