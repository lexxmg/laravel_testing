<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

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
            'title' => $this->faker->name(),
            'preview' => $this->faker->text(50),
            'discription' => $this->faker->text(),
            'img' => $this->faker->loremflickr('posts')
        ];
    }
}