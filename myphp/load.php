<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//$a=date('Y-m-d');
//echo $a;
include("blogtext/coon.php");

$sql  = "SELECT * FROM `user`";
 $qurr=mysql_query($sql);
 
 $name=$_POST['name1'];
 $password=$_POST['password1'];
 


 if($_POST['submit'])
 {
	while($row=mysql_fetch_array($qurr))
	{
		static $b = 0;
 	if($row['name']==$_POST['name1'])
 	{   
		$b++;
 		$a=md5($_POST['password1']);
 		if($a==$row['password'])
 		{
 			//setcookie("cookie","ok");
 			header('refresh:3;url=vlans.php');
 			
			if($_POST['anniu']=="on")
			{
				setcookie("username",$name,time()+60*60*24);
				setcookie("password",$password,time()+60*60*24);
				}
			echo "登录成功！3秒后转入、、、、";
 			break;
 		}
 		else
 		{
 			header('refresh:3;url=login.php');
 			echo"密码错误！3秒后返回登录";
 			break;

 		}
 		
 	}
 	
	}
	if($b==0)
	{
		header('refresh:3;url=login.php');
 			echo"用户名错误！3秒后返回登录";
	}
 }

////////////////////////////////////////////////
?>
</body>
</html>
