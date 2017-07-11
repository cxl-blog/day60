<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/10
 * Time: 18:10
 */
/*for ($i=0;$i<strlen($val);$i++)
{
    if($val[$i]!="|")
        $value+=$val[$i];
    else {
        $str[] = $value;
        $value="";
    }


}*/
/*$row=array();
if(!empty($_POST['submit']))
{
    $file=fopen("user.txt\\user.txt","r");
    $string=array();
    while (!feof($file)) {
        $string[]=fgets($file);
    }
    fclose($file);
    $i=0;
    $b=0;

    while ($i<count($string)){
        $row[]=$string[$i];
        // echo strstr($row,"ccl");

        if(strstr($string[$i],$_POST['name'])) {

            $row[]=$_POST['name']."|".$_POST['sex']."|".$_POST['old']."|".$_POST['comment'];
            break;
        }
        $i++;
    }
}
$file=fopen("user.txt\\user.txt","w");
$i=0;
while ($i<count($row))
{
    if(filesize($path."\\user.txt")=="")
        fwrite($file,$row[$i]);
    else
        fwrite($file,"\n".$row[$i]);
    $i++;
}
fclose($file);*/
?>
<html>
<form name="form" method="post" action="form.php">
    <label for="name">姓名：</label>
    <input type="text" name="name" id="name" value="<?php echo $_GET['name'] ?>"><br>
    <label for="sex">性别：</label>
        <input type="text" name="sex" id="sex" value="<?php echo  $_GET['sex'] ?>"><br>
        <label for="old">年龄：</label>
        <input type="text" name="old" id="old" value="<?php echo $_GET['old'] ?>"><br>
        <label for="comment">个人简介：</label>
        <textarea id="comment" name="comment"> <?php echo $_GET['comment'] ?></textarea>
        <input type="submit" value="提交" name="submit">
</form>

</html>


