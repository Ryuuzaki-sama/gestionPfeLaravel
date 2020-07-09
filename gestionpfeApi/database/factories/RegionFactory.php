<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\API\Region;
use App\API\PaysList;
use Faker\Generator as Faker;

$factory->define(Region::class, function (Faker $faker) {
    return [
       'region' => $faker->region,
        'pays_id' => PaysList::inRandomOrder()->first(),
        
    ];
});
