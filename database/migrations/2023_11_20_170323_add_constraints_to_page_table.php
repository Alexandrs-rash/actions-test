<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('page', function (Blueprint $table) {
            $table->foreign('place_id')->references('id')->on('place');
            $table->foreign('thing_id')->references('id')->on('thing');
            $table->foreign('person_id')->references('id')->on('person');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('page', function (Blueprint $table) {
            $table->dropForeign(['place_id', 'thing_id', 'person_id']);
        });
    }
};
