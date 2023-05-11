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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();


            $table->string('agency', 30);
            $table->string('start_station', 30);
            $table->string('arrival_station', 30);
            $table->time('start_time');
            $table->time('arrival_time');
            $table->mediumInteger('train_code');
            $table->tinyInteger('carriages_number')->nullable();
            $table->boolean('is_in_time')->nullable();
            $table->boolean('is_canceled');

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
        Schema::dropIfExists('trains');
    }
};
