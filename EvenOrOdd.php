<!doctype html>
<html lang=zh-CN>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
if (isset($_POST['sub'])){

	$num = $_POST['num'];
	if ($num%2==0){
		echo '偶数';
	} else {
		echo '奇数';
	}
}

?>
<div class="container">
	<form role="form" action="" method="post">
		<div class="form-group">
			<label for="exampleInputEmail1">请输入数字:</label>
			<input type="text" name="num" class="form-control" placeholder="请输入数字">
		</div>
		<!-- Standard button -->
		<input type="submit" name="sub">
	</form>

</div>


</body>
</html>