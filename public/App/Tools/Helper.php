<?php

namespace App\Tools;

class Helper
{
    public static function print_rr($var){
        echo("\n<pre>\n");
        print_r($var);
        echo("\n</pre>");
    }

}