<?php
session_start();

include('includes/database.php');
include('includes/config.php');
include('includes/template.php');

$db = new database($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['name']);
$db = $db->Connection();
$tpl = new template;
if(isset($_SESSION['user_id'])){
	//Get User Info
	include('src/users.php');
	$admin_info = getUserInfo((int)$_SESSION['user_id']);
	$tpl->assign('admin_info', $admin_info);
	if(isset($_GET['mode'])){
		$mode = trim($_GET['mode']);
		switch($mode){
			case 'product':
				include('src/hanghoa.php');
			break;
			
			default:
				$tpl->assign('title', 'Admin Home Page');
				$tpl->assign('template', 'tpl/index/index.tpl');
			break;
		}
	} else {
		$tpl->assign('title', 'Admin Home Page');
		$tpl->assign('template', 'tpl/index/index.tpl');
	}
	$tpl->setTemplateDir('template');
	$tpl->display('index.tpl');
} else {
	header("Location: login.php");
}
?>