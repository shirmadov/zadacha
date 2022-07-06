<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('slug')->nullable();
            $table->string('brand')->nullable();
            $table->json('info')->nullable();
            $table->timestamps();
        });

        Schema::create('car_owners', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('user_id');
//            $table->unsignedBigInteger('car_id');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('car_id')->constrained();
            $table->string('buying_cost')->nullable();
            $table->string('selling_cost')->nullable(1);
            $table->json('info')->nullable();
            $table->date('buying_date')->nullable();
            $table->date('selling_date')->nullable();
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('cars')->references('id')->on('cars');
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
        Schema::dropIfExists('cars');
        Schema::dropIfExists('car_owners');
    }
};
