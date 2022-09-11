<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
</html>
<?php
echo "<div style='position: relative;'>你可能不相信，代码藏起来了</div>";
header("refresh:5;url=$url?background=./matryoshka/image");
highlight_file(__FILE__);
exit;