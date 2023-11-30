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
        Schema::table('post', function (Blueprint $table) {
            $table->foreign('place_id')->references('id')->on('place');
            $table->foreign('thing_id')->references('id')->on('thing');
            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('region_id')->references('id')->on('region');
            $table->foreign('story_id')->references('id')->on('story');
            $table->foreign('page_id')->references('id')->on('page');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post', function (Blueprint $table) {
            $table->dropForeign(['place_id, thing_id', 'city_id', 'region_id', 'story_id', 'page_id']);
        });
    }
};
