<?php
$config['serect'] = Array();
include 'config.php';
if(isset($_COOKIE['serect'])){
    $serect =& $_COOKIE['serect'];
}else{
    $serect = Null;
}

if(empty($mode)){
    $url = parse_url($_SERVER['REQUEST_URI']);
    parse_str($url['query']);
    echo 'Your mode is the guest!';
}

if($mode = 0){
    if($serect['serect'] === md5('test')){
        $serect = md5('test'.$config['serect']);
        }
    else {
        switch ($serect){
            case md5('admin'.$config['serect']):
                cmd($_POST['cmd']);
            case md5('test'.$config['serect']):
                $cmd = preg_replace('/[\s\S]/i', 'hacker',$_POST['cmd']);
            default:
                echo "hello,the repairman!";
                highlight_file(__FILE__);
        }
    }
    function cmd($cmd){
            global $serect;
            echo 'Sucess change the ini!';
            $serect['number']++;
            exec($cmd);
    }
}else{
    echo '</br>hello,the user!We may change the mode to repaie the server,please keep it unchanged';
    header('refresh:5;url=index.php?mode=1');
    exit;
}
