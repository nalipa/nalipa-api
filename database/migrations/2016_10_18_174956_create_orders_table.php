<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('order_number');
            $table->string('status');
            $table->string('tzs_amount');
            $table->string('exchange_rate');
            $table->string('usd_amount');
            $table->string('transaction_fee');
            $table->string('order_amount');
            $table->string('stripe_amount');
            $table->string('stripe_customer');
            $table->string('stripe_charge');
            $table->timestamp('transaction_date');
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
        Schema::dropIfExists('orders');
    }
}
