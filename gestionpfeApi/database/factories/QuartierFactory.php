<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\API\Quartier;
use App\API\Ville;
use Faker\Generator as Faker;

$factory->define(Quartier::class, function (Faker $faker) {
    return [
        'quartier' => $faker->state,
        'ville_id' => Ville::inRandomOrder()->first(),
    ];
});
