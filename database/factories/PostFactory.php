<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
            'title' => $this->faker->sentence(8),
            'content' => $this->faker->text(),
            'user_id' => $this->faker->randomElement(User::all())->id,
            'category_id' => $this->faker->randomElement(Category::all())->id,
        ];
    }
}
