<?php
error_reporting(E_ALL);
require_once ('./helpers.php');
$fruits = [ 1 =>'apple', 2 =>'orange', 3 =>'grape'];
$fruits[20]= 'mango'; // записал новое значение в массив с ключем
unset($fruits[2]);//удалил элемент массива с ключем 2
//print_rr($fruits[1]);//обратились по ключу к элементу массива

$headr = ['name'=>'название книги', 'text'=> 'содержание книги',
'author'=> [ 'firstName'=> 'ivan', 'lastName' => 'shepelev']];
//print_rr($headr);
//print_rr($headr['author']['lastName']);// по ключу author добрался до массива и по ключу lastName пол. значение.

$auto = [
    'brand'=>'opel', 'model'=> 'corsa',
    'engine'=>[
        1.8,2.0,'horsPower'=>[140,180]]];
print_rr($auto['engine']['horsPower'][] = 200); //записал новое значение в самый глубокий уровень массива
print_rr($auto);

$auto1[] = $auto['engine']['horsPower']; //записал в  пустой массив значения последнего уровня массива auto
print_rr($auto1);







