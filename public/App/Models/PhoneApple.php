<?php

namespace App\Models;

class PhoneApple extends Phone
{
    public function __construct( $price, $color, $weight)
    {

        parent::__construct('Apple', $price, $color, $weight);
    }
}