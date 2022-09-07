<?php
require_once ('./helpers.php');
function dividenum(float $firstNumber, float $secondNumber): float
{
$result = $firstNumber / $secondNumber;
    return $result;
}
print_rr(dividenum(104.15));