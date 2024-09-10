<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Livro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livro>
 */
class LivroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipos = Livro::tipos();
        return [
            'titulo'   => $this->faker->sentence(3),
            'isbn'     => $this->faker->ean13(),
            'autor'    => $this->faker->name,
            'user_id'  => User::factory()->create()->id,
            'tipo'     => $tipos[array_rand($tipos)],
            'preco'    => $this->faker->randomFloat(2),
        ];
    }
}
