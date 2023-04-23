<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gateway', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('minimum');
            $table->string('maximum');
            $table->string('instruction');
            $table->string('status');
            $table->string('image')->default('wallet.png');
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
        Schema::dropIfExists('gateway');
    }
}
