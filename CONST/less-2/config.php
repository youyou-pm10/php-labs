<?php
$config['serect'] = md5(random(0,9999));
$flag = 'flag{'.md5($_SERVER['REMOTE_ADDR']).'}';