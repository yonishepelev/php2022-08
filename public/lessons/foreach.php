<?php
require_once('./helpers.php');
$arr = [2, 45, 4563, 3434, 23417];

//неполная запись foreach
foreach ($arr as $value){
    print_rr($value);
}
//полная запись foreach
foreach ($arr as $key => $value){
    print_rr("$key => $value");
}
