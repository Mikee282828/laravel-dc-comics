<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0;$i<100;$i++){
            
            $newComicbook = new Comic();
            $newComicbook->title = $faker->name();
            $newComicbook->description = $faker->paragraph();
            $newComicbook->price = '€' . $faker->numberBetween(0,20)+0.99;
            $newComicbook->save();
        
        }
    }
}
