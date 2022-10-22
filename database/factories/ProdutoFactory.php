<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
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
            'preco' => $this->faker->randomFloat(2, 1, 1000),
            'quantidade' => $this->faker->numberBetween(1, 50),
            'categoria_id' => Categoria::all()->random()->id,
            'marca_id' => Marca::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'foto_produto' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
            'ativo' => $this->faker->boolean,

        ];
    }
}
