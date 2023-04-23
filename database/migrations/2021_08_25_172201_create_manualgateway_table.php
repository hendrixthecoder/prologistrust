<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManualgatewayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manualgateway', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gateway_name')->nullable();
            $table->string('currency')->nullable();
            $table->string('rate')->nullable();
            $table->string('min_amount')->nullable();
            $table->string('max_amount')->nullable();
            $table->string('fixed_charge')->nullable();
            $table->string('percent_charge')->nullable();
            $table->string('deposit_instruction')->nullable();
            $table->string('gateway_image')->nullable();
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
        Schema::dropIfExists('manualgateway');
    }
}
