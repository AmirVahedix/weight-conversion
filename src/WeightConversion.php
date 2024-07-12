<?php

namespace AmirVahedix\WeightConversion;

class WeightConversion
{
    public static function kilograms(float $kilograms): self
    {
        $test = [1, 2, 3];

        return new static($kilograms);
    }

    public function __construct(protected float $kilograms) {}

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }

    public function toStones(): float
    {
        return $this->kilograms * 0.15747;
    }
}
