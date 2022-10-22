<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'felipe',
        //     'email' => 'felipe@email.com',
        //     'password' => bcrypt('12345678'),
        // ]);

        \App\Models\User::factory(7)->create();
        \App\Models\Brand::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Product::factory(100)->create();
        \App\Models\Customer::factory(50)->create();
        \App\Models\PaymentMethod::factory(5)->create();
        \App\Models\Order::factory(50)->create();
        \App\Models\OrderItem::factory(100)->create();
        \App\Models\Stock::factory(100)->create();
    }
}
