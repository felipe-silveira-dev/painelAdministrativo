<?php

use App\Models\Produto;
use App\Models\Venda;
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
        Schema::create('item_vendas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Venda::class)->references('id')->on('vendas');
            $table->foreignIdFor(Produto::class)->references('id')->on('produtos');
            $table->integer('quantidade');
            $table->decimal('valor', 10, 2);
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
        Schema::table('item_vendas', function (Blueprint $table) {
            $table->dropForeign(['venda_id']);
            $table->dropForeign(['produto_id']);
        });
        Schema::dropIfExists('item_vendas');
    }
};
