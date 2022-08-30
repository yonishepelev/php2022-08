<?php
require_once('./helpers.php');
function compare($a)
{
    if ($a < 100) {
        print_rr('Меньше 100 ');
    } else if ($a > 100) {
        print_rr(',Больше 100 ');

    } else if ($a === 100) {
        print_rr(',Равно 100 ');
    }
    print_rr('<br>' . $a);
}

compare(50);
compare(125);
compare(100.0);
$odd = [];
$even = [];

for ($i = 0; $i <= 100; $i = $i + 1) {
    if ($i % 2 === 0) {
        $even [] = $i;
    } else {
        $odd[] = $i;
    }
}
print_rr($even);
print_rr($odd);
