<?php

namespace Database\Seeders;

use App\Models\Festival;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FestivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['rap', 'metal'] as $genre) {
            Festival::factory(10)->big()->create(['genre' => $genre]);
            Festival::factory(10)->small()->create(['genre' => $genre]);
        }
    }
}
