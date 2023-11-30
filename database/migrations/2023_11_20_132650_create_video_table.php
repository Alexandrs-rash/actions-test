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
        Schema::create('video', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('alias');
            $table->string('anons', 500)->nullable();
            $table->string('anons_en', 500)->nullable();
            $table->text('about')->nullable();
            $table->text('about_en')->nullable();
            $table->string('preview')->nullable();
            $table->integer('status');
            $table->integer('created');
            $table->integer('updated');
            $table->integer('region_id')->nullable();
            $table->integer('date_from')->nullable();
            $table->integer('date_to')->nullable();
            $table->string('link')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('html')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video');
    }
};
