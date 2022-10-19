<?php

namespace App\Models\OLD;

class PhoneSamsung extends Phone
{
    public function __construct( $price, $color, $weight)
    {

        parent::__construct('Samsung', $price, $color, $weight);
    }
}
