<?php
function add($id, $id_kh, $tongtien = 0){
	global $db;
	$sql = "INSERT INTO hoadonxuat(id, id_kh, ngayxuat, tongtien) VALUES(:id, :id_kh, NOW(), :tongtien)";
	$db->prepare($sql);
	$data = array(
			'id' => $id,
			'id_kh' => $id_kh,
			'tongtien' => $tongtien
		);
	return $db->execute($data);
}	
function update($id, $id_kh, $tongtien){
	global $db;
	$sql = "UPDATE hoadonxuat SET id_kh = :id_kh, tongtien = :tongtien WHERE id=:id";
	$db->prepare($sql);
	$data = array(
			'id' => $id,
			'id_kh' => $id_kh,
			'tongtien' => $tongtien		
		);
	return $db->execute($data);
}

function delete($id){
	global $db;
	$sql = "DELETE FROM hoadonxuat WHERE id = :id";
	$db->prepare($sql);
	$db->execute(array('id' => $id));
}

function getList(){
	global $db;
	$sql = "SELECT * FROM hoadonxuat";
	$db->prepare($sql);
	$result = $db->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}
function addct($id_hh, $soluong, $ck, $tongtien, $tongtienck, $tongtiensck){
	global $db;
	$sql = "INSERT INTO ctxuat(id_hh, soluong, chietkhau, tongtien, tongtienck, tongtiensck) VALUES(:id_hh, :soluong, :ck, :tongtien, :tongtienck, :tongtiensck)";
	$db->prepare($sql);
	$data = array(
		'id_hh' => $id_hh,
		'soluong' => $soluong,
		'chietkhau' => $chietkhau,
		'tongtien' => $tongtien,
		'tongtienck' => $tongtienck,
		'tongtiensck' => $tongtiensck,
		);
	return $db->execute($data);
}	
function deletect($id){
	global $db;
	$sql = "DELETE FROM ctxuat WHERE id = :id";
	$db->prepare($sql);
	return $db->execute(array('id' => $id));
}
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
switch($act){
	case 'add':
		//Get order id
		$file = fopen('config.txt', 'r+');
		$order = (int)fgets($file);
		$today = getdate();
		$id = 'HDX' . $today['mday'] . $today['mon'] . $today['year'] . $order;
		$tpl->assign('title', 'Thêm hoá đơn xuất');
		$tpl->assign('template', 'tpl/order/add.tpl');
	break;
	default: 
		echo "ahuhu";
	break;
}
?>