<?php

namespace Database\Seeders;

use App\Models\Band;
use App\Models\Festival;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandFestivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Festival::all()->each(function($festival) {
            Band::where('genre', $festival->genre)->get()->each(fn($band) =>
                $festival->bands()->attach($band->id, [
                    'distance' => random_int(10,1000),
                    'status' => random_int(1,100) < 20 ? 'unavailable' : 'available',
                ])
            );
        });
    }
}
