<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(SalarieSeeder::class);
      //$this->call([SalarieSeeder::class, EntrepriseSeeder::class]);
        // $this->call(UserSeeder::class);
    }
}
