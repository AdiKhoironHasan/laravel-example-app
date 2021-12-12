<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => mt_rand(1, 5),
            "category_id" => mt_rand(1, 3),
            "title" => $this->faker->sentence(mt_rand(2, 8)),
            "slug" => $this->faker->slug(),
            "excerpt" => $this->faker->paragraph(mt_rand(5, 10)),
            "body" => $this->faker->paragraph(mt_rand(15, 30))
        ];
    }
}
