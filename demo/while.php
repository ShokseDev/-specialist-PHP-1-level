<?php

$var = "HELLO";
$arr = [1,2,3,4,5];

echo $arr[0];
echo $var[0];

$i = 0;
$len = strlen($var);

while ($i <= $len) {
    echo "$var[$i]\n";
    $i++;
}

