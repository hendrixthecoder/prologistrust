<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemohistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demohistory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('crypto_currency')->nullable();
            $table->string('crypto_symbol')->nullable();
            $table->string('amount')->nullable();
            $table->string('high/low')->nullable();
            $table->string('result')->nullable();
            $table->string('status')->nullable();
            $table->string('date')->nullable();
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
        Schema::dropIfExists('demohistory');
    }
}
