<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/10
 * Time: 13:12
 */
$file=fopen("user.txt\\user.txt","r") or die("链接失败");
while (!feof($file))
{
    static $line=1;
    echo fgets($file);
    ?>
    <html>

    <a href="1delete-user.php?li=<?php echo $line ?>">  <input type="submit" name="submit" value="确认删除"></a><br>

    </html>
    <?php
    $line++;
}
fclose($file);
//$l=$_POST['line'];
if(!empty($_GET['li'])) {
    $file1= fopen("user.txt\\user.txt", "r") or die("链接失败");
    $l = $_GET['li'];

    $lin = 1;
    $string = array();
    while (!feof($file1)) {
        if ($lin != $l) {
            $string[] = fgets($file1);
        } else
            continue;
        $lin++;
    }
    //var_dump($string);
    fclose($file1);
    $file2 = fopen("user.txt\\user.txt", "w") or die("链接失败");
    $i = 0;
    while ($i < count($string)) {
        if ($i == 0)
            fwrite($file2, $string[$i]);
        else
            fwrite($file2, "\n" . $string[$i]);
        $i++;
    }
    fclose($file2);
}
?>