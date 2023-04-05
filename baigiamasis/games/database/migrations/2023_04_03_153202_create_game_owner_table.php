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
        Schema::create('game_owner', function (Blueprint $table) {
            $table->foreignId('game_id')->constrained();
            $table->foreignId('owner_id')->constrained();
            $table->unique(["game_id", "owner_id"], 'game_id_owner_id_unique');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_owner');
    }
};
