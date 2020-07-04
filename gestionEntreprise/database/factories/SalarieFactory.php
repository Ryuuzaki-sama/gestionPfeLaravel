<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Salarie;
use App\Entreprise;
use Faker\Generator as Faker;

$factory->define(Salarie::class, function (Faker $faker) {
   
    return [
        'prenom' => $faker->firstName,
        'nom' => $faker->lastName,
        'email' => $faker->email,
        'dateRecrutement' => $faker->dateTimeThisYear($max='now'),
        'entreprise_id' => Entreprise::inRandomOrder()->first(),
    ];
});
