<?php
function login($username, $password){
	global $db;
	$sql = "SELECT id FROM users WHERE username = :username AND password = :password";
	$stmt = $db->prepare($sql);
	$query = $stmt->execute(array(
			'username' => $username,
			'password' => $password
		));
	if($query){
		$result = $query->fetch(PDO::FETCH_ASSOC);
		return $result['id'];
	} else return false;
}

function getUserInfo($id){
	global $db;
	$sql = "SELECT * FROM users WHERE id = :id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array('id' => $id));
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	if($result)
		return $result;
	else return false;
}

function updateUserInfo($id, $password, $email, $fullname){
	global $db;
	$sql = "UPDATE users SET password = :password, email = :email, fullname = :fullname WHERE id = :id";
	$data = array(
			'id' => $id,
			'password' => $password,
			'email' => $email,
			'fullname' => $fullname
		);
	$stmt = $db->prepare($sql);
	return $stmt->execute($data);
}
?>