<?php
require_once('./helpers.php');
$sellers = ['tipanova'=> ['gena'],'zhukova'=>['aleksey'],'ozerki'=>['nadiy']];
print_rr($sellers);
$newSeller= 'petya';

//$key = 'tipanova';
//$sellers[$key][] = $newSeller;
//$key = 'zhukova';
//$sellers[$key][]= $newSeller;
//$key = 'ozerki';
//$sellers[$key][]= $newSeller;


foreach ($sellers as $key=>$value){
    print_rr('magazin '. $key);
    $sellers[$key][]= $newSeller;
}

print_rr($sellers);
//magazin tipanova
// prodavez 1 gena
// prodavez 2 petya
//print_rr('prodavez 1 '.$sellers['tipanova'][0]);
//print_rr('prodavez 2 '.$sellers['tipanova'][1]);
//
//print_rr('prodavez 1 '.$sellers['zhukova'][0]);
//print_rr('prodavez 2 '.$sellers['zhukova'][1]);
//
//print_rr('prodavez 1 '.$sellers['ozerki'][0]);
//print_rr('prodavez 2 '.$sellers['ozerki'][1]);

foreach ($sellers as $storeName=> $salePersons){
    //print_rr($storeName);
    print_rr('magazin '. $storeName);
    foreach ($salePersons as $key=>$personName) {
      //  print_rr($key);
        //print_rr($personName);
        print_rr('prodavez '.($key+1).' '.$personName);
        print_rr('prodavez '.($key+1).' '.$sellers[$storeName][$key]);
    }

}