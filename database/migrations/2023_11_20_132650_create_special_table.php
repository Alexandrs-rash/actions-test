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
        Schema::create('special', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('alias');
            $table->string('address')->nullable();
            $table->string('address_en')->nullable();
            $table->string('coords')->nullable();
            $table->string('date_start')->nullable();
            $table->string('date_end')->nullable();
            $table->string('anons', 500)->nullable();
            $table->string('anons_en', 500)->nullable();
            $table->text('about')->nullable();
            $table->text('about_en')->nullable();
            $table->string('preview')->nullable();
            $table->integer('status');
            $table->integer('created');
            $table->integer('updated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('special');
    }
};
