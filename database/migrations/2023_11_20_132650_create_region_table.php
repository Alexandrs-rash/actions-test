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
        Schema::create('region', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('region_id')->nullable();
            $table->string('name');
            $table->text('anons');
            $table->string('alias');
            $table->integer('status')->nullable();
            $table->integer('created')->nullable();
            $table->integer('updated')->nullable();
            $table->string('map')->nullable();
            $table->string('preview')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('center')->nullable();
            $table->string('zoom')->nullable();
            $table->string('center_m')->nullable();
            $table->string('zoom_m')->nullable();
            $table->string('zoom_speed')->nullable();
            $table->integer('onmap')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('region');
    }
};
