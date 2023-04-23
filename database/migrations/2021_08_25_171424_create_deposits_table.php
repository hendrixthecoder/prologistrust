<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trx_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('username')->nullable();
            $table->string('method')->nullable();
            $table->string('amount')->nullable();
            $table->string('charge')->nullable();
            $table->string('total')->nullable();
            $table->string('rate')->nullable();
            $table->string('payable')->nullable();
            $table->string('status')->nullable();
            $table->date('date');
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
        Schema::dropIfExists('deposits');
    }
}
