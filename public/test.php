<?php
$a = ['age' => 41, 'name' => 'Andrey', 'hobby' => 'books'];


echo("<pre>");
print_r($a);

echo 'my name ' . $a['name'] . ' I\'m' . $a['age'] . ' my hobby is ' . $a['hobby'] . '.';
echo "<br>";


function multiply($number1, $number2)
{
    return $number1 * $number2;
}

$result = multiply(2, 2);
print_r($result);