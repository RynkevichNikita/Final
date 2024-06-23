<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\MovieWorker;
use App\Models\Movie;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieWorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movie_worker')->delete();

        MovieWorker::factory()
                ->count(500)
                ->state(new Sequence(
                    fn (Sequence $sequence) => ['movie_id' => Movie::all()->random()],
                ))
                ->state(new Sequence(
                    fn (Sequence $sequence) => ['worker_id' => Worker::all()->random()],
                ))
                ->create();
    }
}
