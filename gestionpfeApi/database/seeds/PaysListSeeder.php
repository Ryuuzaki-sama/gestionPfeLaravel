<?php

use Illuminate\Database\Seeder;

class PaysListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory('App\API\PaysList', 10)->create();
    }
}
