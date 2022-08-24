<?php
require_once('./helpers.php');
$arr = [2, 45, 4563, 3434, 23417];


echo($arr[0]);
echo($arr[1]);
echo($arr[2]);

rp($arr[0]);
rp($arr[1]);
rp($arr[2]);

function rp($e)
{
    echo($e);
}

for ($i = 0; $i < count($arr); $i = $i + 1) {
    print_rr($arr[$i]);
    $b ='sdsd';
}
print_rr($i);
print_rr($b);