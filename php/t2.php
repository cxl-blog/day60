<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/10
 * Time: 11:42
 *
 * */
//上传文件；
//echo $_SERVER['SystemDrive'];
$path=$_SERVER['SystemDrive']."\\php文件\\";
if(!is_dir($path))
    mkdir(iconv("utf-8","GB2312//IGNORE",$path),0777,true);

$new_dir=$path.$_FILES['file']['name'];
if(file_exists($_FILES['file']['tmp_name']))
{
    move_uploaded_file($_FILES['file']['tmp_name'],$new_dir);
    echo "上传成功";
}else
    echo "错误";
?>