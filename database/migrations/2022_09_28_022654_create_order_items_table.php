<?php

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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Order::class)->references('id')->on('orders')->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Product::class)->references('id')->on('products')->onDelete('cascade');
            $table->unsignedInteger('quantity')->default(1);
            $table->unsignedFloat('price')->default(0);
            //$table->unsignedFloat('discount')->default(0);
            //$table->unsignedFloat('tax')->default(0);
            //$table->unsignedFloat('total')->default(0);
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
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeignIdFor(\App\Models\Order::class);
            $table->dropForeignIdFor(\App\Models\Product::class);
        });
        Schema::dropIfExists('order_items');
    }
};
