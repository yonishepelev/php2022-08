<?php
error_reporting(E_ALL);
require_once('./helpers.php');

$sellers = ['tipanova' => ['gena'], 'zhukova' => ['aleksey'], 'ozerki' => ['nadya']];
$newseller = 'pety';
foreach ($sellers as $key => $prodavec) {
    print_rr('магазин ' . $key);
}
//$sellers['tipanova'][] = $newseller;
//$sellers['zhukova'][] = $newseller;
//$sellers['ozerki'][] = $newseller;
//print_rr($sellers);

foreach ($sellers as $key => $prodavec) {
    $sellers[$key][] = $newseller;
}
print_rr($sellers);
print_rr("продавец 1 " . $sellers['tipanova'][0]);
print_rr("продавец 2 " . $sellers['tipanova'][1]);
print_rr("продавец 1 " . $sellers['zhukova'][0]);
print_rr("продавец 2 " . $sellers['zhukova'][1]);
print_rr("продавец 1 " . $sellers['ozerki'][0]);
print_rr("продавец 2 " . $sellers['ozerki'][1]);

foreach ($sellers as $storeName=>$salePersons)