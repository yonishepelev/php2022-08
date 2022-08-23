<?php
$a = [];
$b = [2,4,6];
$c = [[3,5,3], [2,6,7]];
echo("<pre>");
//echo($c);
//print_r ($c);
//echo ($c[0][1]); //вывод 5
$d = ($c[0][0] + $c[1][2]);
//echo ($d);

$a = [];

echo("<pre>");


$a[] = 'hello';
$a[] =['world'];
$a[][] = [2, 6, 7];


print_r($a);