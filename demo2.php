<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/26
 * Time: 12:54
 */
//if (isset($_POST['sub'])){
//	$ch = $_POST['yuwen'];
//	$match = $_POST['shuxue'];
//	echo $ch,$match;
//} else{
//	echo 1;
//}


$ch = $_POST['yuwen'];
$match = $_POST['shuxue'];
echo $ch,$match;



?>
<div class="container ">
	<form action="" role="form" class="data-form" method="post" >
		<table class="table  table-bordered table-hover">
			<thead>
				<tr>
					<th class="form-group" colspan="2">判断成绩</th>
				</tr>
			</thead>
			<tbody>
				<tr >
					<td>语文</td>
					<td class="form-group">
						<label class="sr-only" for="exampleInputEmail2">输入语文成绩</label>
						<input type="text" name="yuwen" class="form-control" placeholder="输入语文成绩">
					</td>
				</tr>
				<tr >
					<td>数学</td>
					<td class="form-group">
						<label class="sr-only" for="exampleInputEmail2">输入数学成绩</label>
						<input type="text" name="shuxue" class="form-control" placeholder="输入数学成绩">
					</td>
				</tr>
				<tr>
					<td colspan="2" class="form-group">
						<button class="btn btn-info" name="sub">提交</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>




</div>
</body>
</html>


