<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    public function definition()
    {
        Post::truncate();
        return [
            'title' => $this->faker->name(),
            'description' => "This is simple description",
        ];
    }
}
