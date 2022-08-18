<?php
$number = 1; // int или integer -1000 10000

$float = 1.003; //float
$float2 = 1.003;

$str = 'строка'; // string

$str2 = "строка2";

$boolean = true;
$boolean2 = false;

$array = [1, 3,5];  //массив

//echo ($str);
//echo ("<br>");
//print_r($str2);
//echo ("<br>");
//var_dump($boolean);

// операция с переменными
//текст
$str3 = $str."<br>".$str2."<br>2323<br>";// <br> html tag
//$str = $str.$str2;
$str .= $str2;

echo ($str3);
echo ($str);