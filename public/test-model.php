<?php
require_once './include/common_function.php';


$phone = new \App\Models\Phone('Apple',  999.99,'black', 150 );
$phone2 = clone $phone; //создаем такой же объект

$phone->setModel( '9');
//$phone->price = 999.99;
$phone->ring();
echo '<pre>';
var_dump($phone);
var_dump($phone2);

$phone->setModel( '10');

$model = $phone->getModel();


print_rr($model);
$phone->printInfo();
$phoneSamsung = new \App\Models\PhoneSamsung(500, 'white', 200);
$phoneSamsung->setModel('Galaxy S22');
print_rr($phoneSamsung);
$phoneSamsung->printInfo();
$phoneApple = new  \App\Models\PhoneApple(1100 , 'brown', 134);
print_rr($phoneApple);
print_rr($phoneApple->getColor());
//print_rr($phone->getColor());// это строка с ошибкой так как у родителя не т методов детей