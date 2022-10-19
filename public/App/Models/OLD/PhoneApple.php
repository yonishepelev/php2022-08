<?php

namespace App\Models\OLD;

class PhoneApple extends Phone
{
    public function __construct( $price, $color, $weight)
    {

        parent::__construct('Apple', $price, $color, $weight);
    }
    public function getColor(): string
    {
        return $this->color;
    }
}
