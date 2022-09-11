<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
</html>
<?php
error_reporting(0);
$url = $_SERVER['SCRIPT_NAME'];
//header("refresh:5;url=$url?background=./matryoshka/image");
chdir($url);
$url=str_replace('\\','/',$url).'/matryoshka/';
chdir($url);
ini_set('open_basedir', realpath('.'));
$image = $_GET['background'];
$image = 'glob:///var/www/html/*.php';
if(!empty($image)){
    echo '<div style="position: absolute;"> <img src="data:image/jpeg;base64,' . file_get_contents($image) . '" /> </div>';
}else{
    echo "你的背景图片在你的matryoshka目录！";
}
