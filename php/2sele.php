<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/10
 * Time: 21:02
 */
include "2coon.php";
$sql  = 'SELECT * FROM `user`';
$qurr=$dbh->query($sql);
while($row=$qurr->fetch(PDO::FETCH_ASSOC))
{
    echo $row['id'].": ".$row['name']. "|".$row['sex']."|".$row['age']."|".$row['comment']."<br>";
}
?>