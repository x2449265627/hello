<?php

$str = 'student a am I';
$arr = explode(' ',$str);
$len = count($arr);
$res = '';
for($i=0;$i<$len;$i++){
    $res .= array_pop($arr).' ';
}
echo $res;