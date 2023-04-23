<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeposithistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposithistory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trx_id')->unique();
            $table->string('gateway')->nullable();
            $table->string('amount')->nullable();
            $table->date('date')->nullable();
            $table->string('detail')->nullable();
            $table->string('status')->nullable();
            $table->string('username')->nullable();
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
        Schema::dropIfExists('deposithistory');
    }
}
