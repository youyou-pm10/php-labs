<?php
$config['serect'] = md5(mt_rand(0,9999));
$flag = 'flag{'.md5($_SERVER['REMOTE_ADDR']).'}';