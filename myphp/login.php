<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<style type="text/css">
.anniu1 {
	font-size: 12px;
	color: #F00;
}
</style>
</head>

<body>
   <?php
	
	//include("blogtext/coon.php");
 /* if($_GET['OUT'])
  {
    setcookie("cookie","out");
    echo "<script language=\"javascript\"> location.href='login.php';</script>";



  }

  if($_POST['id']=="admin")
  {
    $uid=md5($_POST[uid]);

    if($uid=='76dd4ef06ba00b107cd804ea94f4bee7')
  {
    setcookie("cookie","ok");
     echo  "<script language=\"javascript\">location.href='login.php';</script>";
  }
  }
  */
 
?>

  <SCRIPT language=javascript>
  function checklogin()
  {

  if(myform.id.value=="")
  {
  	alert("请输入账号");
    myform.id.focus();
    return false;
  }

  if(myform.uid.value=="")
  {
  	alert("请输入密码");
    myform.uid.focus();
    return false;
  }

  }
  </script>

<p>&nbsp; </p>
<form id="myform" name="myform" method="post" action="load.php" onSubmit="return checklogin()";)>
  <p>
    <label for="name1"></label>
  用户名：
  <input type="text" name="name1" id="name1"  value="<?php echo $_COOKIE['name'] ?>"/>
  <br />
  <br />
  密码：  &nbsp;&nbsp;&nbsp;
  <label for="password1"></label>
  <input type="text" name="password1" id="password1"  value="<?php echo $_COOKIE['password'] ?>"/>
  <input name="anniu" type="checkbox" id="anniu" />
  <span class="anniu1">保存登录信息</span></p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="submit" id="submit" value="登录" />
  </p>
  <p><a href="useradd.html">新用户，请注册！</a></p>
</form>
</body>
</html>