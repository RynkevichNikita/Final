<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->delete();

        Genre::insert([
            ['genre' => 'Комедия'],
            ['genre' => 'Боевик'],
            ['genre' => 'Драма'],
            ['genre' => 'Мелодрама'],
            ['genre' => 'Арт-хаус'],
            ['genre' => 'Хоррор'],
            ['genre' => 'Мультфильм'],
            ['genre' => 'Детектив'],
            ['genre' => 'Фантастика'],
        ]);
    }
}
