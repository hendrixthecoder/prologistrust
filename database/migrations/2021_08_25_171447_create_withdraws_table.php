<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('user_id');
            $table->string('trx_id')->nullable();
            $table->string('username')->nullable();
            $table->string('method')->nullable();
            $table->string('amount')->nullable();
            $table->string('charge')->nullable();
            $table->string('total')->nullable();
            $table->string('rate')->nullable();
            $table->string('payable')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('withdraws');
    }
}
