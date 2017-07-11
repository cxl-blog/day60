<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$conn= mysql_connect("localhost","root","")
or die("连接错误");

mysql_select_db("sql1",$conn);
mysql_query("SET NAMES UTF8");

$url=$_SERVER["REQUEST_URI"];  //取得url
$url=parse_url($url);             //解析url

$sql  = "SELECT * FROM `t`";
$qurr=mysql_query($sql);
$rows=mysql_num_rows($qurr);


$pagesize=3;
$page_show=5;
$pagenum=ceil($rows/$pagesize);


//if($_GET['page'])
//{
	$page=1;
	//$page=$_GET['page'];
	$offset=($page-1)*$pagesize;
	//$offset=',';
//}

if($rows>$pagesize)
{
	$sql  = "SELECT * FROM `t` LIMIT $offset, $pagesize";
	$qurr=mysql_query($sql);
	//$row=mysql_fetch_array($qurr);
	while ($row=mysql_fetch_array($qurr))
	{
		echo ("<hr><br>".$row['id']."|".$row['title']);
	}


	if($page<=1)
		$page=1;
	if($page>=$pagenum)
		{$page=$pagenum;}
	$pre_page=($page==1)?1:$page-1;
	$next_page=($page==$pagenum)?$pagenum:$page+1;
	$pagenav.="di";
	$pagenav.="$page/$pagenum";
	$pagenav.=" 页 共 $rows 条记录";
	$pagenav.="<a href=?page=1'> 首页</a>";
	$pagenav.="<a href=?page=$pre_page> 前一页</a>";
	$page_show_start=(ceil($page/$page_show)-1)*$page_show;

	//显示分页

    $page_show_str = '';
 
    if($page_show>$pagenum)
    {
       $page_show = $pagenum;
    }
    for($j=0;$j<=$page_show;$j++)
    {
       $page_show_now = $page_show_start+$j;

    	if($page==$page_show_now)
    	{
      		$page_show_str.= "<a href='?page=$page_show_now'><strong>$page_show_now</strong>			</a> ";
    	}
    	else
    	{

       		$page_show_str.= "<a href='?page=$page_show_now'>$page_show_now</a> ";
    	}

	}
    $pagenav.=$page_show_str;

   	$pagenav.= "<a href=?page=$next_page>下一页</a> ";

   	$pagenav.= "<a href=?page=$pagenum>末页</a>".('&nbsp;');

   	$pagenav.="跳到<select name='topage' size='1' onchange='window.location='?page=.'+this.value>";
	//$pagenav.= "跳到<select name="topage" size="1" onchange="window.location=?page=.'+this.value'"></select>";
	
    for($i=1;$i<=$pagenum;$i++)
    {

		if($i==$page) 
			$pagenav.="<option value='$i'>$i</option>";

		else 
			$pagenav.="<option value='$i'>$i</option>";

    }

    $pagenav.='</select>';

	echo '<div class="pages">'.$pagenav. '</div>' ;




}
	//echo("共".$rows."条"."<a href=$url?page=".($pagela-1).">上一页</a> <a href=$url?page=".($pagela+1).">下一页</a>");
else
{
$sql  = "SELECT * FROM `t`";
$qurr=mysql_query($sql);
//$row=mysql_fetch_array($qurr);
while ($row=mysql_fetch_array($qurr))
{
	echo ("<hr><br>".$row['id']."|".$row['title']);
}

}
?>

</body>
</html>