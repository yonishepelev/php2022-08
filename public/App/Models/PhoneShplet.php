<?php

namespace App\Models;

class PhoneShplet extends Phone
{
    protected int $length;
    protected int $width;
    protected int $height;

    /**
     * @param int $length  длинна в мм
     * @param int $width   ширина в мм
     * @param int $height  высота в мм
     * @return void
     */
    public function setDimensions(int $length, int $width, int $height)
{
    $this->length = $length;
    $this->width = $width;
    $this->weight = $width;
}
}