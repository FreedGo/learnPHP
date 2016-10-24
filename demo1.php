<!doctype html>
<html lang="en">
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
 * Date: 2016/10/12
 * Time: 15:25
 */






echo 'Hello wolrd!';
echo '<br>';
echo '<hr>';
//1.1变量
$a = 1;
$b = 2;
$c = $a + $b;
echo $c;
//unset($a);//销毁变量
echo $a;
echo '<br>';
echo '<hr>';
$d = '锄禾日当午';
$e = 'd';
echo $$e;//$b保存的是变量名a，所以$$b就是$a,  最后输出$a的值。

echo '<br>';
echo '<hr>';

//1.2常量
//define('name','李白');

if (!defined('name')) {
    define('name','杜甫');
}
echo name;
echo '<br><hr>';
$name = '李白';
echo '我叫$name';

echo '<br><hr>';
echo "我叫$name";//双引号中变量正常显示

echo '<br><hr>';

echo "{$name}就是我";//变量要用大括号包起来才可以正常执行，主要是判断结束地方
echo "${name}就是我";//变量要用大括号包起来才可以正常执行，主要是判断结束地方

echo '<br><hr>';
//1.3数组
$stu = array('张三','15','nan');
echo $stu[0],$stu[1],$stu[2];//索引数组

echo '<br><hr>';

$stu1 = array('name'=>'李四','age'=>15,'sex'=>'女');//关联数组
echo $stu1['name'],$stu1['age'],$stu1['sex'];
echo '<br><hr>';

$stu2 = array(1=>'王五',4=>'李四', 0=>'ages' );
print_r($stu1);


echo '<br><hr>';

echo true;
echo false;

print name;
echo '<br><hr>';

var_dump($stu2);

?>
</body>
</html>



