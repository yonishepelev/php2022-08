<?php
require_once ('./helpers.php');
for ($i = 1;$i <= 50;$i++) {
    if ($i % 2 === 0) { // если $i делится на 2 и в результате арифм. действия получ. целое число.

        print_rr($i);
    }
}
 for ($i = 0; $i<= 50; $i+=2){
    //print_rr($i); // определяя переменную I и изменяя инкремент можно проходить по цифрам как угодно с любым шагом
}
 $i = 0;
 for(;$i<=100;$i++){
     //print_rr($i);// аналогичная запись.
 }

for($i = 100;$i<=1000000; $i++){
    If($i% 30 ===0){
        //print_rr($i); // получаем все полные числа при делении на 30
    }
}
$sum = 0;
for ($i = 1;$i <= 1000;$i++) {
    $sum += $i;
}
//print_rr($sum);//??

$incomeShops = 0;
$shops = ['ozerki'=> 200, 'tipanova'=> 400, 'bolshevikov'=> 300, 'zhukova'=> 250];
 foreach ($shops as $key => $value){
 $incomeShops += $value;
}
 $countShops = count($shops);
 $averageIncome = $incomeShops/$countShops;
//print_rr($averageIncome);

$carsSpeeds = [
    95,
    140,
    78
];

$sumOfSpeeds = 0;
$i = 0;
foreach ($carsSpeeds as $speed) {
    $sumOfSpeeds += $speed;
    $i++; // // устанавливаем колличество эл. в массиве без функции count
}
    $averageSpeed = $sumOfSpeeds / $i;
    print_rr($averageSpeed); // обязательно оббъявлять переменную перед циклом



