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
        Schema::create('event', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('year');
            $table->string('date')->nullable();
            $table->integer('hash');
            $table->integer('ruler_id');
            $table->integer('age_id');
            $table->integer('status')->nullable();
            $table->integer('created');
            $table->integer('updated');
            $table->string('map')->nullable();
            $table->string('map_positive')->nullable();
            $table->string('map_negative')->nullable();
            $table->string('zoom');
            $table->string('center')->nullable();
            $table->string('center_m')->nullable();
            $table->string('zoom_m')->nullable();
            $table->string('speed')->default('.1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
};
