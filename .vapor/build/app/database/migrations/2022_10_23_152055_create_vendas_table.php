<?php

use App\Models\Cliente;
use App\Models\MetodoPagamento;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->references('id')->on('users');
            $table->foreignIdFor(Cliente::class)->references('id')->on('clientes');
            $table->date('data');
            $table->decimal('valor_total', 10, 2);
            $table->foreignIdFor(MetodoPagamento::class)->references('id')->on('metodo_pagamentos');
            $table->decimal('desconto', 10, 2)->nullable();
            $table->text('observacao')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendas', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
            $table->dropForeignIdFor(Cliente::class);
            $table->dropForeignIdFor(MetodoPagamento::class);
        });
        Schema::dropIfExists('vendas');
    }
};
