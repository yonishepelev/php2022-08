<?php
require_once ('./helpers.php');
function divideNum(float $firstNumber, float $secondNumber): float
{
   $result = $firstNumber/ $secondNumber;
   return $result;

}
 $r = divideNum(100,50);
print_rr($r);

