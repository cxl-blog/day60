<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("../blogtext/coon.php");
$a=md5($_POST['password']);

 if($_POST['submit1'])
 {
 	$sql="INSERT INTO `users` ( `name`,`password`) VALUES ('$_POST[name]',
	   '$a')";
	  if($coon->query($sql))
	  {
	  	header('refresh:3;url=login.php');
	  	echo "注册成功!3秒后返回登录界面";
	  }

 }
 
?>
</body>
</html>