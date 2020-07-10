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
            'nom' => 'Johnny Depp',
            'titre' => 'the pirates of the caribbean'
        ]);

         App\Personnage::create([
            'nom' => 'Martin Freeman',
            'titre' => 'The Hobbit: An Unexpected Journey'
        ]);

         App\Personnage::create([
            'nom' => 'Tom Cruise',
            'titre' => 'Mission Impossible – Fallout'
        ]);
    }
}
