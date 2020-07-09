<?php

use Illuminate\Database\Seeder;

class SituationFamilialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory('App\API\SituationFamilial', 4)->create();
    }
}
