<?php

use Illuminate\Database\Seeder;

class PersonnagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Personnage::create([
            'nom' => 'Steve Carell',
            'titre' => 'Get Smart'
        ]);

        App\Personnage::create([
            'name' => 'Johnny Depp',
            'titre' => 'the pirates of the caribbean'
        ]);

         App\Personnage::create([
            'name' => 'Martin Freeman',
            'titre' => 'The Hobbit: An Unexpected Journey'
        ]);

         App\Personnage::create([
            'name' => 'Tom Cruise',
            'titre' => 'Mission Impossible – Fallout'
        ]);
    }
}
