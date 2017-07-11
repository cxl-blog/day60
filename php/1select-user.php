
<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/10
 * Time: 13:34
 */
$file=fopen("user.txt\\user.txt","r");
$string=array();
while (!feof($file)) {
    $string[]=fgets($file);
}
/*$openfile=fread($file,filesize("user.txt\\user.txt"));
$string=array("\n",$openfile);*/
//var_dump(count($string));
$i=0;
$b=0;
while ($i<count($string)){
     $row=$string[$i];
    // echo strstr($row,"ccl");

   if(strstr($row,$_POST['select'])) {
        echo $row;
        $b++;

            //$b=$row
        break;
    }
    $i++;
}
if ($b==0)
    echo "无用户";
//print_r($string);
//echo array_search("11",$string);
//$name=$_POST['name'];

//echo strstr($openfile,"ccl");
?>

