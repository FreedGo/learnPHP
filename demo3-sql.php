<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/28
 * Time: 11:20
 */
//$link=@mysql_connect('localhost','root','') or die('链接失败');
$link = @mysql_connect('localhost','root','');
if ($link){
	echo 'success';
} else {
	echo 'fail';
	die('try');
}









?>
</body>
</html>
