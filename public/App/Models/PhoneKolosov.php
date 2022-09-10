<?php

namespace App\Models;

class PhoneKolosov extends Phone
{

    protected int $length;
    protected int $width;
    protected int $height;

    /**
     * @param int $length Длина в мм
     * @param int $width Ширина в мм
     * @param int $height Толщина в мм
     * @return void
     */
    public function setDimensions(int $length, int $width, int $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }



}