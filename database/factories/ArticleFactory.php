<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Writer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Article::class;
     private static $counter = 1;
    public function definition(): array
    {
        
        return [
            'writer_id' => Writer::inRandomOrder()->first()->id,
            'image_link' => 'link',
            'category' => fake()->randomElement(['Data-Science','Network-Security']),
            'title' => fake()->sentence(4),
            'content' => fake()->paragraphs(3, true),
            'views' => 0,
        ];
    }
}
