<?php
function flag()
{
    $flag = md5(ini_get('session.cookie_path'));
    if ($_SERVER['HTTP_REFERER'] != '0.0.0.0') {
        echo '这不是你该来的地方，叉出去！';
        header("location: ./matryoshka");
        exit;
    } else {
        echo '这不是你该来的地方，叉出去！';
        $flag='flag{' . $flag . '}';
        header("location: ./?$flag");
    }
}
flag();