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
        Schema::create('site', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('alias');
            $table->string('anons')->nullable();
            $table->integer('created');
            $table->integer('updated');
            $table->string('meta_title')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->integer('status');
            $table->integer('pos')->nullable();
            $table->string('link')->nullable();
            $table->string('media')->nullable();
            $table->string('media_poster')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site');
    }
};
