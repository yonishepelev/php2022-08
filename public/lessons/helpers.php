<?php
error_reporting(E_ALL);
function print_rr($var)
{
    echo("\n<pre>\n");
    print_r($var);
    echo("\n</pre>");

}
function print_re($var) {
    echo("\n<pre>\n");
    print_r($var);
    echo("\n</pre>");
    die();
}

function divideNum(float $firstNumber, float $secondNumber): float
{
    return $firstNumber / $secondNumber;
}

