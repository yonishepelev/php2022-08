<?php

namespace App\Models;

class PhoneSamsung extends Phone
{
    public function __construct( $price, $color, $weight)
    {

        parent::__construct('Samsung', $price, $color, $weight);
    }
}