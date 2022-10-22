<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\PaymentMethod;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'user_id' => User::all()->random()->id,
            'customer_id' => Customer::all()->random()->id,
            'order_number' => $this->faker->unique()->randomNumber(8),
            //'order_date' => $this->faker->date(),
            'order_status' => $this->faker->randomElement(['pendente', 'processando', 'aprovado', 'cancelado']),
            'payment_method_id' => rand(1,5), //PaymentMethod::all()->random()->id,
            'total_amount' => $this->faker->randomFloat(2, 0, 1000),
            'discount' => $this->faker->randomFloat(2, 0, 1000),
            'tax' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
