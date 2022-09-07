<?php
require_once('functions.php');
$odd = [];
$even = [];

for ($i = 1; $i <= 100; $i += 2){
    $odd[] = $i;
}

for ($i = 0; $i <= 100; $i += 1) {
    $even[] = $i;
}
$numbers = range(10,20);
print_rr('Число ' . $numbers[0]);
print_rr('Число ' . $numbers[1]);
print_rr('Число ' . $numbers[2]);


for ($i=0; $i<count($numbers); $i+= 1){
    print_rr('Число ' . $numbers[$i]);
}
$numbers2 = [];
//$numbers2[]=$numbers[1];
//$numbers2[]=$numbers[2];

for ($i=0; $i<count($numbers); $i+= 1){
    $numbers2[]=$numbers[$i];
}
print_rr($numbers);
print_rr($numbers2);