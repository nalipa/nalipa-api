<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('transaction_date');
            $table->integer('order_id');
            $table->integer('utility_code_id');
            $table->integer('service_provider_id');
            $table->string('recipient');
            $table->string('recipient_number');
            $table->string('account_number');
            $table->string('amount');
            $table->mediumText('sms');
            $table->string('sms_result');
            $table->string('status');
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
        Schema::dropIfExists('transactions');
    }
}
