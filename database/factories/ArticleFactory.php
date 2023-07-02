<?php

namespace Database\Factories;

use App\Models\Article;
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
    public function definition(): array
    {
        return [
//            "user_id" => rand(1,10),
            "title" => fake()->text(50),
            "slug" => fake()->slug(),
            "body" => fake()->paragraph(rand(5, 20))
        ];
    }
}
