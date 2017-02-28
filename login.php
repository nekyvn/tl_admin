<?php
session_start();
include_once('includes/config.php');
include_once('includes/database.php');
include_once('includes/template.php');
//Initialize Database 
$db = new database($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['name']);
//Initialize Smarty
$tpl = new template;
if(isset($_SESSION['user_id']))
	header("Location: index.php");
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = "SELECT id FROM users WHERE username = :username AND password = :password";
	$db = $db->Connection();
	$stmt = $db->prepare($query);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute(array('username' => $username, 'password' => $password));
	$result = $stmt->fetch();
	if($result != NULL){
		$_SESSION['user_id'] = $result['id'];
		header("Location: index.php");
	}

}

$tpl->display('login.tpl');

if(isset($_GET['act'])){
	$act = $_GET['act'];
	if($act == 'logout'){
		session_destroy();
		header("Location: index.php");
	} 
}
?>