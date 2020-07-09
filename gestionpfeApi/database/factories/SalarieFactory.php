<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\API\Salarie;
use App\API\Entreprise;
use App\API\AbsenceLegal;
use App\API\Accident;
use App\API\EmploiAnterieur;
use App\API\Founction;
use App\API\Instruction;
use App\API\PaysList;
use App\API\PermisList;
use App\API\Promotion;
use App\API\Sanction;
use App\API\SituationFamilial;
use App\API\SuiviProfessionel;
use App\API\Ville;

use Faker\Generator as Faker;

$factory->define(Salarie::class, function (Faker $faker) {
    return [
      'title' => $faker->title,
      'nom_salarie' => $faker->lastName,
      'prenom_salarie' => $faker->firstName,
      'gender' => $faker->randomElement(['male', 'female']),
      'nationalite' => $faker->city,
      'date_naissance' => $faker->dateTimeThisCentury($max='now'),
      'adresse' => $faker->address,
      'email' => $faker->email,
      'telephone' => $faker->phoneNumber,
      'date_entree' => $faker->dateTimeThisYear($max='now'),
      'observations' => $faker->text,
      'cin_salarie' => 'D829214',
      'cin_date_created_at' => $faker->dateTimeThisCentury($max='now'),
      'cin_localisation_created_at' => $faker->city,
      'pays_id' => PaysList::inRandomOrder()->first(),
      'ville_id' => Ville::inRandomOrder()->first(),
      'permis_id' => PermisList::inRandomOrder()->first(),
      'situation_familial_id' => SituationFamilial::inRandomOrder()->first(),
      'founction_id' => Founction::inRandomOrder()->first(),
      'sanction_id' => Sanction::inRandomOrder()->first(),
      'accident_id' => Accident::inRandomOrder()->first(),
      'promotion_id' => Promotion::inRandomOrder()->first(),
      'absence_legal_id' =>AbsenceLegal::inRandomOrder()->first(),
      'suivi_professionel_id'=> SuiviProfessionel::inRandomOrder()->first(),
      'entreprise_id' => Entreprise::inRandomOrder()->first(),
    ];
});
