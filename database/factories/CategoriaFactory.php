<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nome' => $this->faker->name,
            'slug' => $this->faker->slug,
            'descricao' => $this->faker->text,
            'is_active' => $this->faker->boolean,
            'user_id' => User::all()->random()->id,
        ];
    }
}
