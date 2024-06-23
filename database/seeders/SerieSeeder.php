<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Serie;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('series')->delete();

        Serie::factory()
                ->count(10)
                ->state(new Sequence(
                    fn (Sequence $sequence) => ['movie_id' => Movie::all()->random()],
                ))
                ->create();
    }
}
