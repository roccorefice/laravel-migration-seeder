<?php

use App\Section;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker )
    {
        for ($i=0; $i < 10; $i++) { 
            $newSection = new Section();
            $newSection->class = $faker->randomLetter();
            $newSection->numero_studenti = $faker->numberBetween(0, 30);
            $newSection->save();
        }
    }
}
