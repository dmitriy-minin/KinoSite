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
        Schema::create('films_with_genres', function (Blueprint $table) {
            
            // $table->unsignedInteger('genre_id');
            // $table->unsignedInteger('film_id');
            
            // $table->index('genre_id', 'genre_film_idx');
            // $table->index('film_id', 'film_genre_idx');

            // $table->foreign('genre_id')->on('genres')->references('id');
            // $table->foreign('film_id')->on('films')->references('id');
            
            
            $table->foreignId('genre_id')->constrained('genres');
            $table->foreignId('film_id')->constrained('films');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films_with_genres');
    }
};
