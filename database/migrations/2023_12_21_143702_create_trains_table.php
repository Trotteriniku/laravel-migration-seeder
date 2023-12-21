<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 150);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 50)->unique()->index();
            $table->tinyInteger('numbero_of_carriages')->default(10);
            $table->tinyInteger('in_time')->unsigned()->default(1);
            $table->tinyInteger('deleted')->unsigned()->default(0);
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
