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
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('12345678')
        ]);
        \App\Models\Marca::factory(3)->create();
        \App\Models\Categoria::factory(3)->create();
        \App\Models\Produto::factory(10)->create();
        \App\Models\Cliente::factory(10)->create();
        \App\Models\MetodoPagamento::factory()->create([
            'nome' => 'Dinheiro',
            'descricao' => 'Pagamento em dinheiro',
        ]);
        \App\Models\MetodoPagamento::factory()->create([
            'nome' => 'Cartão de crédito',
            'descricao' => 'Pagamento em cartão de crédito',
        ]);
        \App\Models\MetodoPagamento::factory()->create([
            'nome' => 'Cartão de débito',
            'descricao' => 'Pagamento em cartão de débito',
        ]);
        \App\Models\MetodoPagamento::factory()->create([
            'nome' => 'Boleto',
            'descricao' => 'Pagamento em boleto',
        ]);
        \App\Models\MetodoPagamento::factory()->create([
            'nome' => 'Pix',
            'descricao' => 'Pagamento em Pix',
        ]);
        \App\Models\MetodoPagamento::factory()->create([
            'nome' => 'Transferência bancária',
            'descricao' => 'Pagamento em transferência bancária',
        ]);
        \App\Models\MetodoPagamento::factory()->create([
            'nome' => 'Outros',
            'descricao' => 'Pagamento em outros métodos',
        ]);


    }
}
