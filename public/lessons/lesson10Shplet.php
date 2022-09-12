<?php

use App\Models\PhoneShplet;

require_once '../include/common_function.php';

$phoneShplet = new PhoneShplet('Xiomi', 350, 'blue', 150);
$phoneShplet2 = new PhoneShplet('Xiomi11', 350, 'blue', 150);
$phoneShplet->setDimensions(150, 25, 200);
echo '<pre>';
var_dump($phoneShplet);
var_dump($phoneShplet2);
var_dump($phoneShplet->getBox());
var_dump($phoneShplet2->getBox());

//print_rr($phoneShplet);
//echo $phoneShplet->getvolume() . ' mm';
$phoneShplet->setBox(10);
var_dump($phoneShplet->getBox());
var_dump($phoneShplet2->getBox());

print_rr($phoneShplet);