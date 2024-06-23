<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GenreSeeder::class,
            MpaaSeeder::class,
            PlatformSeeder::class,
            ProfessionSeeder::class,
            StatusSeeder::class,
            MovieSeeder::class,
            WorkerSeeder::class,
            RateSeeder::class,
            MovieWorkerSeeder::class,
            SerieSeeder::class,
        ]);
    }
}
