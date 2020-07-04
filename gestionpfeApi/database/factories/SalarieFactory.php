<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\API\Salarie;
use Faker\Generator as Faker;

$factory->define(Salarie::class, function (Faker $faker) {
    return [
      'title' => $faker->title,
      'nom_salarie' => $faker->lastName,
      'prenom_salarie' => $faker->firstName,
      'gender' => $faker->randomElement(['male', 'female']),
      'nationalite' => $faker->city,
      'date_naissance' => $faker->dateTimeThisDecade($max='now'),
      'adresse' => $faker->address,
      'telephone' => $faker->phoneNumber,
      'date_entree' => $faker->dateTimeThisYear($max='now'),
      'observations' => $faker->text,
      'cin_salarie' => 'D829214',
      'cin_date_created_at' => $faker->dateTimeThisCentury($max='now'),
      'cin_localisation_created_at' => $faker->city,
      'pays_id' => $faker->numberBetween($min = 1, $max = 4),
      'ville_id' => $faker->numberBetween($min = 1, $max = 4),
      'permis_id' => $faker->numberBetween($min = 1, $max = 4),
      'situation_familial_id' => $faker->numberBetween($min = 1, $max = 4),
      'fonction_id' => $faker->numberBetween($min = 1, $max = 4),
      'sevice_id' => $faker->numberBetween($min = 1, $max = 4),
      'sanction_id' => $faker->numberBetween($min = 1, $max = 4),
      'accident_id' => $faker->numberBetween($min = 1, $max = 4),

      //'entreprise_id' => Entreprise::inRandomOrder()->first(),
    ];
});
