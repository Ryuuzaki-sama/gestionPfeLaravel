<?php

use Illuminate\Database\Seeder;

class PermisListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory('App\API\PermisList', 10)->create();
    }
}
