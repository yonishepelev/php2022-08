<?php

namespace App\Models\OLD;

class PhoneShplet extends Phone
{
    static private int $box = 5;
    protected int $length;
    protected int $width;
    protected int $height;

    /**
     * @param int $length длинна в мм
     * @param int $width ширина в мм
     * @param int $height высота в мм
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

    public function getvolume()
    {
        $volume = $this->length * $this->height * $this->width;
        return $volume;
    }
    public static function getPlace():string
    {
        return 'Рыбацкий 10';
    }
}
