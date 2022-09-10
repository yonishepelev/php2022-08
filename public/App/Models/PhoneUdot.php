<?php

namespace App\Models;

class PhoneUdot extends Phone
{
 protected int  $length;
 protected int  $width;
 protected int  $height;


public function setDimensions($length, $width, $height) {
    $this->length = $length;
    $this->width = $width;
    $this->height = $height;
}


}
