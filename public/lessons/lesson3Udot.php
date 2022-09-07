<?php
$a=3;
$b = 'world';
$c = $a.$b;
$d = 45.5;
$e = [];
$e[]= $a;
$e[]= $d;
$e[] = $e[0]+$e[1];
echo('<pre>');
print_r($e);
print_r($e[2]);
$f = ['Tipanova'=>'Gena','Zhukova'=>'Slava'];
print_r($f);
$g = 'magazin Tipanova ' . $f['Tipanova'];
print_r($g);
$h = strConcat('magazin Tipanova ', $f['Tipanova'] );
print_r($h);
function strConcat (string $stringOne,string $stringTwo):string{
return $stringOne.' '.$stringTwo;
}

