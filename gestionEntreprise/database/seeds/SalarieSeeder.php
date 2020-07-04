<?php

use Illuminate\Database\Seeder;

class SalarieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory('App\Salarie',100)->create();
    }
}
