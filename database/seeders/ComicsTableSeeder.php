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
        $newComicbook = new Comic();
        $newComicbook->title = "Spiderman";
        $newComicbook->description = "Questo è la descrizione di Spiderman";
        $newComicbook->price = "€19,99";
        $newComicbook->save();
    }
}
