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
$str3 = $str."<br>".($str2."<br>2323<br>");// <br> html tag
//$str = $str.$str2;
$str .= $str2;

//echo ($str3);
//echo ('ываываыпвц');
//echo ($str3);
//echo ($str3);
//echo ($str3);
//числа
$int = 3;
$int2 =5;
$int4 = 3+4;
$int3 = $int + $int2;
$a = 2**2;
$b = 5%2;
$c = 4;
$c++;
$d = $c;
++$c;
$e = $c;
$c--;
--$c;

//echo($e);
$r = 5;
$r +=6;
$r *=4;
$r /=2;
$r -=2;
//echo ($r);
// boolean
$a = false;
$b = 2 == 2;//true
$a = 3;
$b = 4;
$c = $a != $b;


var_dump($c);
$a = 4;
$b = '4';
$c = $a == $b;
$d = $a === $b;
$c = $a != $b;
$d = $a !== $b;

