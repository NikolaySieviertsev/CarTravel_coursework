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
            $table->string('name');
            $table->string('gearbox');
            $table->string('engine');
            $table->integer('capacity');
            $table->integer('price');            
        });

        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->integer('stops');
            $table->integer('duration');
            $table->string('living');
            $table->integer('price');            
        });
        
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
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
        Schema::dropIfExists('numbers');
        Schema::dropIfExists('tours');
    }
};
