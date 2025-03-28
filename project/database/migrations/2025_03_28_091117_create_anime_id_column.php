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
        Schema::table('films', function (Blueprint $table) {
            $table->foreignId('anime_id')->constrained()->cascadeOnDelete();
            $table->date('releaseDate');
            $table->integer('duration');
            $table->text('videoLink');
            $table->text('posterLink');
            $table->text('thumbnail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('films', function (Blueprint $table) {
            //
        });
    }
};
