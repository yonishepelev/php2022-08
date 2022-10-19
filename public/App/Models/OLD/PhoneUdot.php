<?php

namespace App\Models\OLD;

class PhoneUdot extends Phone
{
    static private int $box = 5;
    protected int $length;
    protected int $width;
    protected int $height;


    /**
     * @param int $length Длина в мм
     * @param int $width Ширина в мм
     * @param int $height Высота в мм
     * @return void
     */
    public function setDimensions(int $length, int $width, int $height): void
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getBox(): int
    {
        return self::$box;
    }

    public function setBox(int $number): void{
        self::$setbox = $number;
    }

    public function getVolume()
    {
        $volume = $this->length * $this->width * $this->height;
        return $volume;
    }
public static function getPlace(): string
{
    return 'Рыбацкое  10';
}

}
