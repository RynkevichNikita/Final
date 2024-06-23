<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profession;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('professions')->delete();

        Profession::insert([
            ['profession' => 'Режиссер'],
            ['profession' => 'Продюсер'],
            ['profession' => 'Оператор'],
            ['profession' => 'Композитор'],
            ['profession' => 'Актер'],
        ]);
    }
}
