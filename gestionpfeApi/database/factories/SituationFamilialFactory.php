<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\API\SituationFamilial;
use App\API\Condjoint;
use Faker\Generator as Faker;

$factory->define(SituationFamilial::class, function (Faker $faker) {
    return [
        'situation'=> (['celibataire','Mariée','Divorce','Veuf']),
        'conjoint_id' => Condjoint::inRandomOrder()->first(),
    ];
});
