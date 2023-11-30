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
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 128);
            $table->string('password', 128);
            $table->integer('super')->nullable();
            $table->string('email', 128);
            $table->integer('create_at');
            $table->integer('lastvisit');
            $table->integer('access');
            $table->integer('superuser');
            $table->integer('status');
            $table->string('activkey');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
