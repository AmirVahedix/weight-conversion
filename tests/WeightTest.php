<?php

use AmirVahedix\WeightConversion\WeightConversion;

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversion::kilograms(1000)->toPounds();
    
    expect($pounds)->toEqual(2204.6);
});
