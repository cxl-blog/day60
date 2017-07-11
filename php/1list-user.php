<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/10
 * Time: 14:02
 */
$file=file("user.txt\\user.txt");
foreach ($file as $str) {
    echo $str;
    $val = explode("|", $str);

    echo "<a href='xiugai.php?name=".$val[0]."&sex=".$val[1]."&old=".$val[2]."&comment=".$val[3]."'> 修改 </a>";
    echo "<br>";
}
?>

