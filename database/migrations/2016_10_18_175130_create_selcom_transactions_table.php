<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelcomTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selcom_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('transaction_date');
            $table->integer('transaction_id');
            $table->integer('order_id');
            $table->string('utility_code');
            $table->string('utility_ref');
            $table->string('amount');
            $table->string('msisdn');
            $table->string('reference');
            $table->string('result_code');
            $table->string('result');
            $table->string('message');
            $table->integer('user_id');
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
        Schema::dropIfExists('selcom_transactions');
    }
}
