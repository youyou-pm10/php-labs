<?php
if(!empty($_POST['cmd'])){
    $cmd = escapeshellcmd(escapeshellarg($_POST['cmd']));
    print_r(system("curl $cmd"));
}else{
    //php version < 5.2.0
    echo "注意！PHP版本为".phpversion();
    echo "</br>你没有输入访问的对象！";
}
if($_SERVER["REMOTE_ADDR"]==='127.0.0.1'){
    if($_POST['id']==1){
        echo 'flag';
    }else{
        highlight_file(__FILE__);
    }
}else{
    echo "亲爱的用户IP：".$_SERVER["REMOTE_ADDR"]."</br>为什么不试试自作自受？";
}
//$arg = '127.0.0.1\' -v -d id=1';
