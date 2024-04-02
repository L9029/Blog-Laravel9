<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;//Esta clase convierte cualquier texto en una url amigable

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //Se crean registros falsos para la base de datos
        return [
            "title" => $title = $this->faker->sentence(),
            "slug" => Str::slug($title),
            "body" => $this->faker->text(2200)
        ];
    }
}
