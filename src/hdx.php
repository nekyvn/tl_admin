<?php
function add($id, $id_kh, $tongtien = 0){
	global $db;
	$sql = "INSERT INTO hoadonxuat(id, id_kh, ngayxuat, tongtien) VALUES(:id, :id_kh, NOW(), :tongtien)";
	$stmt = $db->prepare($sql);
	$data = array(
			'id' => $id,
			'id_kh' => $id_kh,
			'tongtien' => $tongtien
		);
	return $stmt->execute($data);
}	
function update($id, $id_kh, $tongtien){
	global $db;
	$sql = "UPDATE hoadonxuat SET id_kh = :id_kh, tongtien = :tongtien WHERE id=:id";
	$stmt = $db->prepare($sql);
	$data = array(
			'id' => $id,
			'id_kh' => $id_kh,
			'tongtien' => $tongtien		
		);
	return $stmt->execute($data);
}

function delete($id){
	global $db;
	$sql = "DELETE FROM hoadonxuat WHERE id = :id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array('id' => $id));
}

function getList(){
	global $db;
	$sql = "SELECT * FROM hoadonxuat";
	$stmt = $db->prepare($sql);
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}
function addct($id_hh, $soluong, $ck, $tongtien, $tongtienck, $tongtiensck){
	global $db;
	$sql = "INSERT INTO ctxuat(id_hh, soluong, chietkhau, tongtien, tongtienck, tongtiensck) VALUES(:id_hh, :soluong, :ck, :tongtien, :tongtienck, :tongtiensck)";
	$stmt = $db->prepare($sql);
	$data = array(
		'id_hh' => $id_hh,
		'soluong' => $soluong,
		'chietkhau' => $chietkhau,
		'tongtien' => $tongtien,
		'tongtienck' => $tongtienck,
		'tongtiensck' => $tongtiensck,
		);
	return $stmt->execute($data);
}	
function deletec($id){
	global $db;
	$sql = "DELETE FROM ctxuat WHERE id = :id";
	$stmt = $db->prepare($sql);
	return $stmt->execute(array('id' => $id));
}
function listKH(){
	global $db;
	$stmt = $db->prepare("SELECT * FROM khachhang");
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
switch($act){
	case 'add':
		//Get order id
		$file = fopen('config.txt', 'r+');
		$order = (int)fgets($file);
		$today = getdate();
		$id = 'HDX' . $today['mday'] . $today['mon'] . $today['year'] . $order;
		$tpl->assign('mhd', $id);
		//Get list khach hang
		$listKH = listKH();
		$tpl->assign('lKH', $listKH);

		$tpl->assign('success', "");
		$tpl->assign('error', "");
		if(isset($_POST['submit'])){
			$id_kh = $_POST['id_kh'];
			$tongtien = $_POST['tongtien'];
		}
		$tpl->assign('title', 'Thêm hoá đơn xuất');
		$tpl->assign('template', 'tpl/order/add.tpl');
	break;
	default: 
		echo "ahuhu";
	break;
}
?>