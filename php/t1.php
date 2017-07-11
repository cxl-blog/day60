<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/10
 * Time: 11:24
 */
//文件操作
$file=fopen("../html/html.html","r") or die("打开失败");
echo fread($file,filesize("../html/html.html"));
/*while (!feof($file))
{
    echo fgets($file)."\n";
}*/
fclose($file);
$file=fopen("t1.html","w") or die("打开失败");
fwrite($file,"nizaiganshenem1 \n这是一个p   hp测试\n12233");
fclose($file);
//print_r($_SERVER)
?>