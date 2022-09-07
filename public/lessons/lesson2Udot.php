<?php
$a = [];
$b = [2,4,6];
$c = [[3,5,3], [2,6,7]];
echo("<pre>");
echo($c);
print_r ($c);
//echo ($c[0][1]); //вывод 5
//echo ($c[1][1]);
//echo('<br>');
//echo ($c[1][2]);
//$array = $c[1][2]+$c[1][2];
//echo($array);

//$array1 = $c[0][2]+$c[1][1];
//echo($array1);

$array2=[];
$array2[0]=[];
$array2[0][0] = [2,6,7];
print_r($array2);

//$array2 =[];
//$array2[2]=[2,6,7];
$array2 = [[1,2,300],[1,2,400]];
$array2[2]=[2,6,7];
$array2[][][][][] = [23,56756,567];

echo('<pre>');
print_r($array2);


