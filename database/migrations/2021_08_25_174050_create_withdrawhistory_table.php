<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawhistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawhistory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trx_id')->unique();
            $table->string('gateway')->nullable();
            $table->string('amount')->nullable();
            $table->string('charge')->nullable();
            $table->string('after_charge')->nullable();
            $table->string('rate')->nullable();
            $table->string('receivable')->nullable();
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
        Schema::dropIfExists('withdrawhistory');
    }
}
