<?php

namespace App\Models\OLD;

class PhoneKolosov extends Phone
{

    static int $box = 5;
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

    public function getBox(): int
    {
        return self::$box;
    }

    public function setBox(int $number): void
    {
        self::$box = $number;
    }


    public function getVolume()
    {
        $volume = $this->length * $this->width * $this->height;
        return $volume;
    }

    public static function getPlace(): string
    {
        return self::$box.' Рыбацкий 10';
    }


}
