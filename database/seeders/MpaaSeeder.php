<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mpaa;
use Illuminate\Support\Facades\DB;

class MpaaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mpaas')->delete();

        Mpaa::insert([
            ['mpaa' => 'G'],
            ['mpaa' => 'PG'],
            ['mpaa' => 'PG-13'],
            ['mpaa' => 'R'],
            ['mpaa' => 'NC-17'],
        ]);
    }
}
