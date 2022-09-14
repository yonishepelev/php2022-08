<?php

use App\Models\PhoneUdot ;

require_once '../include/common_function.php';

$phoneUdot = new PhoneUdot('xiomi', 300.3, 'green', 120);
$phoneUdot2 = new PhoneUdot('xiomi30', 202.3, 'white', 120);
$length = 100;
$width = 200;
$height = 10;
$phoneUdot->setDimensions($length, $width, $height);
echo "< pre >";
var_dump($phoneUdot);
print_rr($phoneUdot->getVolume());
var_dump($phoneUdot2);
print_rr($phoneUdot->getVolume());
print_rr($phoneUdot2->getBox());
$phoneUdot->setbox(10);
print_rr($phoneUdot->getBox());
print_rr($phoneUdot2->getBox());
