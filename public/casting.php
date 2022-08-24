<?php
require_once('./helpers.php');

$a = '32';

$b = (int) $a;
var_dump($b); // (int) 32

$c = 0+$a;
var_dump($c); // (int) 32

$d = (bool) $a; //true
var_dump($d);
//https://www.php.net/manual/ru/language.types.boolean.php