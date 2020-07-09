<?php

use Illuminate\Database\Seeder;

class regionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory('App\API\Region', 10)->create();
    }
}
