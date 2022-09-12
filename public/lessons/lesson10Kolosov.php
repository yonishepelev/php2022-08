<?php

use App\Models\PhoneKolosov;
use App\Tools\Helper;

require_once '../include/common_function.php';
$phoneKolosov = new PhoneKolosov('samsung',150,'black',208);
$phoneKolosov2 = new PhoneKolosov('samsung2',250,'black',208);
$phoneKolosov->setDimensions(160,75,8);
echo"<pre>";

var_dump($phoneKolosov);
print_rr($phoneKolosov->getVolume());
var_dump($phoneKolosov2);
print_rr($phoneKolosov->getBox());
print_rr($phoneKolosov2->getBox());
$phoneKolosov->setBox(10);
print_rr($phoneKolosov->getBox());
print_rr($phoneKolosov2->getBox());
print_rr($phoneKolosov2::getPlace());
print_rr(PhoneKolosov::getPlace());
Helper::print_rr(PhoneKolosov::$box);
