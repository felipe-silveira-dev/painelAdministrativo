<?php

use App\Models\Customer;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->references('id')->on('users')->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Customer::class)->references('id')->on('customers')->onDelete('CASCADE')->onUpdate('CASCADE')->nullable();
            $table->string('order_number')->unique();
            $table->string('order_status')->default('pending');
            $table->foreignIdFor(\App\Models\PaymentMethod::class)->references('id')->on('payment_methods')->onDelete('CASCADE')->onUpdate('CASCADE')->default(1);
            $table->unsignedFloat('total_amount')->default(0);
            $table->unsignedFloat('discount')->default(0);
            $table->unsignedFloat('tax')->default(0);
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
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeignIdFor(User::class);
            $table->dropForeignIdFor(Customer::class);
            $table->dropForeignIdFor(\App\Models\PaymentMethod::class);
        });
        Schema::dropIfExists('orders');
    }
};
