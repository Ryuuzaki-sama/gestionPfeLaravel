<?php

use Illuminate\Database\Seeder;

class QuartierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory('App\API\Quartier', 10)->create();
    }
}
