<?php

use App\Models\Categoria;
use App\Models\Marca;
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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('slug');
            $table->text('descricao');
            $table->decimal('preco', 8, 2);
            $table->integer('quantidade');
            $table->string('foto_produto', 2048)->nullable();
            $table->boolean('ativo')->default(true);
            $table->foreignIdFor(User::class)->references('id')->on('users');
            $table->foreignIdFor(Categoria::class)->references('id')->on('categorias');
            $table->foreignIdFor(Marca::class)->references('id')->on('marcas');
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
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
            $table->dropForeignIdFor(Categoria::class);
            $table->dropForeignIdFor(Marca::class);
        });
        Schema::dropIfExists('produtos');
    }
};
