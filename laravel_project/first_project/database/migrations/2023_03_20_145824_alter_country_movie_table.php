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
        Schema::table('country_movie', function (Blueprint $table)
        {
            $table->index('movie_id');
            $table->index('country_id');
            $table->dropUnique('country_movie_movie_id_unique');
            $table->dropUnique('country_movie_country_id_unique');
            $table->unique(['movie_id', 'country_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('country_movie', function (Blueprint $table) {
            $table->unique('movie_id');
            $table->unique('country_id');
            $table->dropUnique(['movie_id', 'country_id']);
            $table->dropIndex('country_movie_movie_id_index');
            $table->dropIndex('country_movie_country_id_index');
        });
    }
};