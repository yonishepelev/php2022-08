<?php
error_reporting(E_ALL);
require_once ('./helpers.php');
$fruits = [ 1 =>'apple', 2 =>'orange', 3 =>'grape'];
$fruits[20]= 'mango';
unset($fruits[2]);
print_rr($fruits);
$headr = ['name'=>'название книги', 'text'=> 'содержание книги',
'author'=> [ 'firstName'=> 'ivan', 'lastName' => 'shepelev']];
print_rr($headr);
$headr['author']['lastName'];// обращаюсь к массиву. почему не выводит фамилию
print_rr($headr);





