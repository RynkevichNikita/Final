<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Platform;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('platforms')->delete();

        Platform::insert([
            ['platform' => 'Netflix'],
            ['platform' => 'Amazon'],
            ['platform' => 'Apple TV'],
            ['platform' => 'Кинопоиск'],
        ]);
    }
}
