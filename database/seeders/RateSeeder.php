<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Rate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rates')->delete();

        Rate::factory()
                ->count(500)
                ->state(new Sequence(
                    fn (Sequence $sequence) => ['movie_id' => Movie::all()->random()],
                ))
                ->create();
    }
}
