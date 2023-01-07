<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = fake();
        $faker->addProvider(FakerPicsumImagesProvider::class);

        return [
            'path' => $faker->image(
                dir: storage_path('app/public/houses'),
                isFullPath: false
            )
        ];
    }
}
