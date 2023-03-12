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
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->integer('floor_id');
            $table->string('photo');
            $table->string('name_uz')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_kr')->nullable();
            $table->integer('room_count');
            $table->text('rooms')->nullable();
            $table->string('long_area');
            $table->string('d');
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
        Schema::dropIfExists('flats');
    }
};
