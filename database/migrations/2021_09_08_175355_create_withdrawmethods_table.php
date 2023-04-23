<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawmethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawmethods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('method_name')->nullable();
            $table->string('currency')->nullable();
            $table->string('rate')->nullable();
            $table->string('processing_time')->nullable();
            $table->string('min_amount')->nullable();
            $table->string('max_amount')->nullable();
            $table->string('fixed_charge')->nullable();
            $table->string('percent_charge')->nullable();
            $table->string('withdraw_instruction')->nullable();
            $table->string('method_image')->nullable();
            $table->string('status')->default('inactive');
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
        Schema::dropIfExists('withdrawmethods');
    }
}
