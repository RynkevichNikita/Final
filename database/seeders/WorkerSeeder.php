<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Worker;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('workers')->delete();

        Worker::factory()
                ->count(100)
                ->state(new Sequence(
                    fn (Sequence $sequence) => ['profession_id' => Profession::all()->random()],
                ))
                ->create();
    }
}
