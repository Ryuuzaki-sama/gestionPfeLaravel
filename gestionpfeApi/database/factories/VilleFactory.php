<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\API\Ville;
use App\API\Region;
use Faker\Generator as Faker;

$factory->define(Ville::class, function (Faker $faker) {
    return [
        'ville' => $faker->city,
        'region_id'-> Region::inRandomOrder()->first(),
    ];
});
