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
        Schema::table('Animes', function (Blueprint $table) {
            $table->text("thumbnail");
            $table->string('status');
            $table->string('rating');
            $table->string('rank');
            $table->string('score');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Animes', function (Blueprint $table) {
            //
        });
    }
};
