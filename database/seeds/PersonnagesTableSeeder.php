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
            'titre' => 'Get Smart',
            'note' => '15'
        ]);

        App\Personnage::create([
            'nom' => 'Johnny Depp',
            'titre' => 'the pirates of the caribbean',
            'note' => '19'
        ]);

         App\Personnage::create([
            'nom' => 'Martin Freeman',
            'titre' => 'The Hobbit: An Unexpected Journey',
            'note' => '20'
        ]);

         App\Personnage::create([
            'nom' => 'Tom Cruise',
            'titre' => 'Mission Impossible – Fallout',
            'note' => '17'
        ]);
    }
}
