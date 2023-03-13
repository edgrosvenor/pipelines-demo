<?php

namespace Database\Seeders;

use App\Models\Band;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['rap', 'metal'] as $genre) {
            Band::factory(100)->top()->create(['genre' => $genre]);
            Band::factory(200)->high()->create(['genre' => $genre]);
            Band::factory(300)->medium()->create(['genre' => $genre]);
            Band::factory(400)->low()->create(['genre' => $genre]);
        }

    }
}
