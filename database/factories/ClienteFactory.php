<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
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
            'email' => $this->faker->unique()->safeEmail,
            'telefone' => $this->faker->phoneNumber,
            'cpf' => $this->faker->cpf(false),
            'cnpj' => $this->faker->cnpj(false),
            'data_nascimento' => $this->faker->date(),
        ];
    }
}
