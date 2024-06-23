<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Mpaa;
use App\Models\Platform;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->delete();

        Movie::factory()
                ->count(100)
                ->state(new Sequence(
                    fn (Sequence $sequence) => ['genre_id' => Genre::all()->random()],
                ))
                ->state(new Sequence(
                    fn (Sequence $sequence) => ['mpaa_id' => Mpaa::all()->random()],
                ))
                ->state(new Sequence(
                    fn (Sequence $sequence) => ['status_id' => Status::all()->random()],
                ))
                ->state(new Sequence(
                    fn (Sequence $sequence) => ['platform_id' => Platform::all()->random()],
                ))
                ->create();
    }
}
