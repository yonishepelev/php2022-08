<?php

require_once ('./helpers.php');
print_rr(232);
error_reporting(E_ALL);
$a = 4;
$b = 6;
$c = multiplyNumber($a, $b);

$d = 7;
$e = 8;
$f = multiplyNumber($d, $e);
echo("<pre>");
print_r($c);
echo('<br>');
print_r($f);
$g = multiplyNumber(256,2467);
print_r($g);

print_rr($g);

function multiplyNumber(float $firstNumber, float $secondNumber): float
{
    $a = "sdfgs";
    print_r($a);
    echo("<br> I am working <br>");
    $result = $firstNumber * $secondNumber;
    return $result;
}

