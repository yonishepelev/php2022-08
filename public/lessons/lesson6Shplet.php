<?php
error_reporting(E_ALL);
require_once('./helpers.php');

function compare($a)
{
    if ($a < 100) {
        print_rr("число меньше 100");
    } elseif ($a === 100) {
        print_rr("равно 100");
    } else {
        print_rr("все остальные значения. т.е. больше 100");
    }
}

compare(50);
compare(100);
compare(111);

$odd = [];
$even = [];

//$i = 1;
//if($i % 2 === 0)
//    $even[] = $i;
//else
//    $odd[] = $i;
//
//$i = 2;
//if($i % 2 === 0)
//    $even[] = $i;
//else
//    $odd[] = $i;


for ($i = 1; $i <= 100; $i = $i + 1) {
    if ($i % 2 === 0) { // проверяет четность (остаток от деления 0 = четное)
        $even[] = $i; // добавляет в массив четные числа.
    } else {
        $odd[] = $i;// добавляет в массив нечетные числа
    }
}
print_rr($odd);// выводит нечетный массив
print_rr($even);// выводит четный массив
