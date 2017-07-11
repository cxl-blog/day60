
<?php
header("Content-type: text/html; charset=utf-8");

if(!empty($_GET['ll']))
{
    $delline=$_GET['ll']+1;
    $filename="user.txt\\user.txt";//定义操作文件
    $farray=file($filename);//读取文件数据到数组中
    $newfp=array();
    for($i=0;$i<count($farray);$i++)
    {
        if(strcmp($i+1,$delline)==0)  //判断删除的行,strcmp是比较两个数大小的函数
        {
            continue;
        }
        if($farray[$i]=="")
        {
            continue;
        }
        $newfp.=$farray[$i];    //重新整理后的数据
    }
    $fp=fopen($filename,"w");//以写的方式打开文件
    fwrite($fp,$newfp);
    fclose($fp);
}

$myfile=fopen("user.txt\\user.txt","r") or die("Unable to open file!");
echo "<table style='border: solid 1px black;text-align: left;width:500px;'>";
$line=0;
while(!feof($myfile))
{
    $txt=fgets($myfile); //读取文件中的内容
    if($txt=="")
    {
        continue;
    }
    echo '<tr><td>';
    for($i=0;$i<strlen($txt);$i++)
    {
        $c=$txt[$i];
        if($c=="|"){
            echo '</td><td>';
            continue;
        }
        echo $c;
    }
  /*  if($line==0){
        echo '</tr>';
        $line++;
        continue;
    }*/
    echo "<td><a href='1delete-user.php?ll=".$line."'><input type='button' name='delete' value='删除'/></a></td>";
    $line++;
    echo '</tr>';
}
fclose($myfile);
echo '</table>';
?>
<a href="../html.html"><input type="button" value="返回"/></a>


