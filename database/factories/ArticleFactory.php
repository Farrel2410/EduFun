<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraph(4),
            'category_id' => rand(1, 2),
            'writer_id' => rand(1, 2),
            'date' => now()->subDays(rand(0, 30)),
            'views' => rand(50, 300),
        ];
    }
}
