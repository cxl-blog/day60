<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/10
 * Time: 12:48
 */
$path="user.txt";
if(!is_dir($path))
    mkdir(iconv("UTF-8","GB2312//IGNORE",$path),0777,true);
$file=fopen($path."\\user.txt","a+") or die("打开失败");
if(filesize($path."\\user.txt")==""){
    fwrite($file,$_POST['name']."|".$_POST['sex']."|".$_POST['old']."|".$_POST['comment']);
}
else{
    fwrite($file,"\n".$_POST['name']."|".$_POST['sex']."|".$_POST['old']."|".$_POST['comment']);
}

fclose($file);
$file1=fopen($path."\\user.txt","r")or die('失败');
//echo fread($file1,filesize($path."\\user.txt"));
while (!feof($file1)) {
    static $a=1;
    echo $a.":".fgets($file1)."<br>";
    $a++;
}
fclose($file1);
?>
