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
      $this->call([
        EntrepriseSeeder::class,
        PaysListSeeder::class,
        // PermisListSeeder::class,
        QuartierSeeder::class,
        // RegionSeeder::class,
        // SituationFamilialSeeder::class,
        // VilleSeeder::class,
        // SalarieSeeder::class,
        UserSeeder::class,
      ]
      );
      
      //$this->call([SalarieSeeder::class, EntrepriseSeeder::class]);
      // $this->call(UserSeeder::class);
    }
}
