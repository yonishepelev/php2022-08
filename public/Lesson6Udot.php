<?php
error_reporting(E_ALL);
require_once ('./helpers.php');
function compare($a){
    if ( $a < 100){
    print_rr('меньше 100');
    } elseif ($a > 100){
        print_rr('больше 100');
    } else {
        print_rr('равно 100');
    }

}
compare(50);
compare(50);
compare(150);

$add = [];
$even = [];
for ($i = 1;$i<=100;$i++){
    if ($i %2 === 0){
        $even[] = $i;
    }else{
        $add[] = $i;
    }

}print_rr($even);
print_rr($add);

