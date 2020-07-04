<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {
    return [
        'denomination' => $faker->company,
        'slogon' => $faker->catchPhrase,
    ];
});
