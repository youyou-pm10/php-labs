<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>
        草稿箱
    </title>
</head>
<body>
<div style="position: absolute;">
    <img src="../../images/1.jpg" alt="仪仪画像" title="仪仪画像" height="500" width="500">
</div>
<div style="position: relative;"
<p>服务器将保存你的草稿哦Qwq</p>
<form action="index.php" method="POST">
    草稿名称：<input type="text" id="name" name="name">
    </br>
    草稿内容：<textarea id="contents" name="contents" rows="5" cols="30"></textarea>
    </br>
    <input type="submit">
</form>
</form>
</body>
</html>
<?php
error_reporting(0);
$contents = $_POST['contents'];
$name = is_array($_POST['name'])?Null:$_POST['name'];
function waf($str){
    if(!preg_match('/(?s)^.*\.php[\s\S]?/i',$str)){
        return True;
    }
    else{
        return False;
    }
}
if(!empty($name) && !empty($contents)) {
   if (preg_match('/^.*?\.(pht)|(htaccess)$/i', $name)) {
        echo '本服务器不是apache支持！你仔细看看';
        highlight_file(__FILE__);
    }elseif (waf($name)) {
        $name='cache_'.rand(100,999).substr($name, 0,5);
        echo "你的草稿<a href='./$name'>在这</a>";
        file_put_contents($name, $contents);
    }else {
        die('Hacker!!!');
    }
}else{
    echo "草稿为空白！";
}
?>
