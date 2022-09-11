<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
</html>
<?php
if($_SERVER['HTTP_REFERER']!='127.0.0.1'){
    echo '这不是你该来的地方，叉出去！';
    header("location: ./matryoshka");
    exit;
}
header("refresh:5;url=$url?background=./matryoshka/image");
exit;