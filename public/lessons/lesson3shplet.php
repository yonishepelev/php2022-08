<?php
$a = 3;
$b = 'world';
$c = $a . $b;
$d = 45.5;
$e = [];
$e[] = $a;
$e[] = $d;
$e[] = $e[0] + $e[1];

echo("<pre>");
print_r($e);
print_r($e[2]);

$f = ['Tipanova' => 'Gena', 'Zhukova' => 'Vycheslav'];
print_r($f);
$g = 'magazin tipanova ' . $f['Tipanova'] . '<br>';
print_r($g);
function strCuncat(string $stringOne,string $stringTwo): string
{
    return $stringOne . ' ' . $stringTwo;
}

$h = strCuncat('magazin tipanova', $f['Tipanova']);
print_r($h);