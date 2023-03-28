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
        Schema::table('genre_movie', function (Blueprint $table)
        {
            $table->index('movie_id');
            $table->index('genre_id');
            $table->dropUnique('genre_movie_movie_id_unique');
            $table->dropUnique('genre_movie_genre_id_unique');
            $table->unique(['movie_id', 'genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('genre_movie', function (Blueprint $table) {
            $table->unique('movie_id');
            $table->unique('genre_id');
            $table->dropUnique(['movie_id', 'genre_id']);
            $table->dropIndex('genre_movie_movie_id_index');
            $table->dropIndex('genre_movie_genre_id_index');
        });
    }
};
