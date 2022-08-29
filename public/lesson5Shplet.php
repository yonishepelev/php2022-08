<?php
error_reporting(E_ALL);
require_once('./helpers.php');
$odd = [];
$even = [];
for ($i = 1; $i <= 100; $i = $i + 2) {
    $odd[] = $i;
}
for ($i = 2; $i <= 100; $i = $i + 2) {
    $even[] = $i;
}
print_rr($even);

$numbers = range(10, 20);
print_rr($numbers);
print_rr('число ' . $numbers[0]);
print_rr('число ' . $numbers[1]);
print_rr('число ' . $numbers[2]);
print_rr('число ' . $numbers[3]);
for ($i =0; $i < count($numbers); $i++){
    print_rr('число ' . $numbers[$i]);
}
$numbers2 = [];
//$numbers2[] = $numbers[0];
//$numbers2[] = $numbers[1];
//$numbers2[] = $numbers[2];
for ($i = 0; $i < count($numbers); $i++){
    $numbers2[] = $numbers[$i];
     }
print_rr($numbers2);