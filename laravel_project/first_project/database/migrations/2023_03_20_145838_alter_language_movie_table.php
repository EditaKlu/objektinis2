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
        Schema::table('language_movie', function (Blueprint $table)
        {
            $table->index('movie_id');
            $table->index('language_id');
            $table->dropUnique('language_movie_movie_id_unique');
            $table->dropUnique('language_movie_language_id_unique');
            $table->unique(['movie_id', 'language_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('language_movie', function (Blueprint $table) {
            $table->unique('movie_id');
            $table->unique('language_id');
            $table->dropUnique(['movie_id', 'language_id']);
            $table->dropIndex('language_movie_movie_id_index');
            $table->dropIndex('language_movie_language_id_index');
        });
    }
};