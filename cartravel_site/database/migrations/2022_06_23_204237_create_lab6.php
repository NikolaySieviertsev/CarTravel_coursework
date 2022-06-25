<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    /*  Run the migrations.
     
     @return void */
    
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
        });
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
        });
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('client');
            $table->foreign('client')->references('id')->on('clients');
        });
        Schema::create('manager_trip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manager_id');
            $table->unsignedBigInteger('trip_id');
            $table->foreign('trip_id')->references('id')->on('trips');
            $table->foreign('manager_id')->references('id')->on('managers');
        });
    }

    
     /*  Reverse the migrations.
     
      @return void */
    
    public function down()
    {
        Schema::dropIfExists('managers');
        Schema::dropIfExists('trips');
        Schema::dropIfExists('trip_manager');
    }
};