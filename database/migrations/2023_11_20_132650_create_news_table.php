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
        Schema::create('news', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('preview')->nullable();
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('alias');
            $table->string('anons', 500)->nullable();
            $table->string('anons_en', 500)->nullable();
            $table->text('about')->nullable();
            $table->text('about_en')->nullable();
            $table->integer('date')->nullable();
            $table->integer('created');
            $table->integer('updated');
            $table->integer('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
