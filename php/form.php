<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/10
 * Time: 20:40
 */

$lines=file("user.txt\\user.txt");
 $name=trim(htmlspecialchars($_POST['name'])); // 去除首尾空格
 $m1=trim(htmlspecialchars($_POST['sex']));
 $m2=trim(htmlspecialchars($_POST['old']));
 $m3=trim(htmlspecialchars($_POST['comment']));
$fp=file("user.txt\\user.txt");
$total=count($fp);
foreach ($lines as $key=>$value) {
    $line=explode("|",$value);
    if (trim($line[0])==$name) {
        $lines[$key]=$name."|".$m1."|".$m2."|".$m3."\n";
        break;
    }
}
/*for($i=0;$i<$total;$i++){
    if($i)
        $savestr.=$tmp[$i];
} //写入文件 */
 $fp=fopen("user.txt\\user.txt","w");
foreach ($lines as $value) {
    fwrite($fp,$value);
}
fclose($fp);
header("Location: ../html.html");

?>