<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\House;
use App\Models\Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = Feature::require()->get();

        House::factory(25)
            ->hasAttached(
                $features, ['value' => fake()->sentence(3)]
            )
            ->has(
                Media::factory(1)
            )
            ->create();
    }
}
