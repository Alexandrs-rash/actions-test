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
        Schema::create('page', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('alias');
            $table->integer('status')->nullable();
            $table->string('anons', 500)->nullable();
            $table->string('anons_en', 500)->nullable();
            $table->integer('created');
            $table->integer('updated');
            $table->string('preview')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->integer('place_id')->nullable();
            $table->integer('thing_id')->nullable();
            $table->integer('person_id')->nullable();
            $table->integer('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page');
    }
};
