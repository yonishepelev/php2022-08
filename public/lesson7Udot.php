<?php
error_reporting(E_ALL);
require_once ('./helpers.php');
$sellers = ['tipanova'=>['gena'], 'zhukova'=>['aleksey'], 'ozerki'=>['nadya']];
//print_rr($sellers);
//magazin tipanova
$newSeller = 'petya';
foreach ($sellers as $key => $value){
    //print_rr('magazin ' . $key);
}
$sellers['tipanova'][]= 'petya';
$sellers['zhukova'][]= 'petya';
$sellers['ozerky'][]= 'petya';

foreach ($sellers as $key => $value) {
$sellers[$key][] = $newSeller;
}
//print_rr($sellers);

$sellers['tipanova'][0,1];
