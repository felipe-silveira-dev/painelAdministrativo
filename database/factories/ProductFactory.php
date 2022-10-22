<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;
use App\Models\Category;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [

                'name' => $this->faker->name,
                'slug' => $this->faker->slug,
                'description' => $this->faker->text,
                'price' => $this->faker->randomFloat(2, 1, 1000),
                //'quantity' => $this->faker->numberBetween(1, 10),
                'product_photo_path' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker'),
                'is_active' => $this->faker->boolean,
                'user_id' => User::all()->random()->id,
                'category_id' => Category::all()->random()->id,
            ];
    }
}
