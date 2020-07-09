<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\API\PaysList;
use App\API\Region;
use Faker\Generator as Faker;

$factory->define(PaysList::class, function (Faker $faker) {
    return [
        'pays' => $faker->country,
        'region_id' => Region::inRandomOrder()->first(),
    ];
});
