<?php

namespace Database\Factories;

// use Faker\Core\File;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Writer>
 */
class WriterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'writer_profile_picture_link' => 'link',
            'writer_name' => str_replace(' ','-',fake()->name()),
            'description' => fake()->sentence(),
        ];
    }
}
