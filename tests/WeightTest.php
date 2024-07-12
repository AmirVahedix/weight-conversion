<?php

use AmirVahedix\WeightConversion\WeightConversion;

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversion::kilograms(100)->toPounds();
    expect($pounds)->toEqual(220.46);
});

it('can convert kilograms to stones', function () {
    $stones = WeightConversion::kilograms(100)->toStones();
    expect($stones)->toEqual(15.747);
});
