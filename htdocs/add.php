<?php
 /**
 * Example Application

 * @package Example-application
 */

require 'init.php';

//  防止全局变量造成安全隐患
$isLogin = false;
//  启动会话，这步必不可少
session_start();

if(!admin::isLogin()) {
	forward("login.php");
}

// **********************************
// ### 3.添加菜
// methor: POST
// action: add.php
// data:
// 	name, price, category, upload_file, content
// 	// category 为数字 1,2,3,4 分别对应四个类别 chinese western fruit dessert
// 	action = add
// result:
// 	成功: $log = 1
// 	失败: $log = 0
// **********************************


if (isset($_POST['action']) && $_POST['action'] == "add") {
	$db = new db(DB_HOST, DB_USER, DB_PWD, DB_NAME);
	switch ($_POST['category']) {
		case '1':
			$category = 'chinese';
			break;
		case '2':
			$category = 'western';
			break;
		case '3':
			$category = 'fruit';
			break;
		case '4':
			$category = 'dessert';
			break;
		default:
			break;
	}
	$food = new food($db, $category);
	$pic = uploadPic();

	$name = $_POST['name'];
	$price = $_POST['price'];
	$content = $_POST['content'];

	$log = $food->addFood($name, $price, $pic, $content);
	if($log){

	}
	else{
		
	}
}

$smarty = new Smarty;

$smarty->setTemplateDir(WE_TEMPLATE_DIR);
$smarty->setCompileDir(WE_COMPILE_DIR);
$smarty->setConfigDir(WE_CONFIG_DIR);
$smarty->setCacheDir(WE_CACHE_DIR);

// $smarty->testInstall();

// $smarty->force_compile = true;
// $smarty->debugging = true;
// $smarty->caching = true;
// $smarty->cache_lifetime = 120;

$smarty->display('add.html');

