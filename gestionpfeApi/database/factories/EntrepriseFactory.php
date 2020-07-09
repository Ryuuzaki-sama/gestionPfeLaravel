<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\API\Entreprise;
use Faker\Generator as Faker;

$factory->define(Entreprise::class, function (Faker $faker) {
    return [
        'denomination' => $faker->company,
        'slogon' => $faker->catchPhrase
    ];
});
