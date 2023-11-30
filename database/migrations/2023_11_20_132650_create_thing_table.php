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
        Schema::create('thing', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('alias');
            $table->string('address')->nullable();
            $table->string('address_en')->nullable();
            $table->string('coords')->nullable();
            $table->string('lat')->nullable();
            $table->string('len')->nullable();
            $table->string('anons', 500)->nullable();
            $table->string('anons_en', 500)->nullable();
            $table->text('about')->nullable();
            $table->text('about_en')->nullable();
            $table->string('preview')->nullable();
            $table->integer('status');
            $table->integer('created');
            $table->integer('updated');
            $table->integer('size')->default(1);
            $table->string('zoom')->nullable();
            $table->string('zoom_speed')->nullable();
            $table->integer('region_id')->nullable();
            $table->integer('type_id')->nullable();
            $table->string('date')->nullable();
            $table->integer('date_from')->nullable();
            $table->integer('date_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thing');
    }
};
