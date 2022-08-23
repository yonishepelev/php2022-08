<?php
$a = 3;
$b = "World";
$c = $a . $b;
$d = 45.5;
$e = [];
$e[] = $a;
$e[] = $d;
$e[] = $e[0] + $e[1];
echo('<pre>');
print_r($e);
print_r($e[2]);
$f = ['tipanova' => 'Gena', 'zhukova' => 'Vyacheslav'];
$f['ozerki'] = 'Nadya';

($f);
$g = 'magazin tipanova ' . $f['tipanova'];
$h = strConcat('magazin tipanova', $f['tipanova']);
print_r($h);
function strConcat(string $stringOne, string $stringTwo): string
{
    return $stringOne . ' ' . $stringTwo;

}
