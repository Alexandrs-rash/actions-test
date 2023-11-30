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
        Schema::create('post_part', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('parent_id');
            $table->integer('post_part_id')->nullable();
            $table->string('name')->nullable();
            $table->string('name_en')->nullable();
            $table->text('about')->nullable();
            $table->text('about_en')->nullable();
            $table->integer('created');
            $table->integer('updated');
            $table->integer('position')->nullable();
            $table->string('preview')->nullable();
            $table->integer('status')->nullable();
            $table->string('alias')->nullable();
            $table->string('link')->nullable();
            $table->string('quotes')->nullable();
            $table->integer('template')->nullable();
            $table->integer('place_id')->nullable();
            $table->text('caption')->nullable();
            $table->text('html')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_part');
    }
};
