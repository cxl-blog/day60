<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/3
 * Time: 8:58
 */
header("Content-TYpe:text/html;charset=utf-8");
include "2coon.php";
$fp=file("user.txt\\user.txt");
foreach($fp as $str)
{
    $val=explode("|",$str);
    $sql = "INSERT INTO user( id,name,sex,age,comment) VALUE ('','$val[0]','$val[1]','$val[2]','$val[3])";
    $dbh->query($sql);
}





?>