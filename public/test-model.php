<?php
require_once './App/Models/Phone.php';
require_once './App/Models/PhoneSamsung.php';
require_once './lessons/helpers.php';

$phone = new \App\Models\Phone('Apple',  999.99,'black', 150 );
//$phone->brand = 'Apple';
$phone->setModel( '9');
//$phone->price = 999.99;
$phone->ring();
echo '<pre>';
var_dump($phone);
print_r($phone);

$model = $phone->getModel();


print_rr($model);
$phone->printInfo();
$phoneSamsung = new \App\Models\PhoneSamsung(500, 'white', 200);
$phoneSamsung->setModel('Galaxy S22');
print_rr($phoneSamsung);
$phoneSamsung->printInfo();