<?php 
// GETパラメータ取得
$params = explode('/', $_GET['url']);

$resource = $params[0];
$action = $params[1];
$id = 0;
$post = array();

// もしidが有った場合は、idも取得する
if (isset($params[2])) {
	$id = $params[2];
}

if (isset($_POST) && !empty($_POST)) {
	$post = $_POST;
}

// コントローラの呼び出し
require('controllers/'.$resource.'_controller.php');




 ?>