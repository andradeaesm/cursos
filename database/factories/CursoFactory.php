<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoria_id' => Categoria::factory(),
            'nome' => $this->faker->unique()->sentence(3),
            'descricao' => $this->faker->paragraph(),
            'valor' => $this->faker->randomFloat(2, 50, 800),
            'professor' => $this->faker->name(),
            'duracao' => $this->faker->randomElement(['2 meses', '4 meses', '6 meses']),
            'vagas' => $this->faker->numberBetween(10, 30),
        ];
    }
}
