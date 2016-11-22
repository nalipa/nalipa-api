<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('system_name');
            $table->string('selcom_vendor');
            $table->string('selcom_pin');
            $table->string('test_secret_key');
            $table->string('test_publishable_key');
            $table->string('live_secret_key');
            $table->string('live_publishable_key');
            $table->string('exchange_rate_percent');
            $table->string('transaction_fee_percent');
            $table->string('last_rate');
            $table->string('exchange_rate');
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
        Schema::dropIfExists('systems');
    }
}
