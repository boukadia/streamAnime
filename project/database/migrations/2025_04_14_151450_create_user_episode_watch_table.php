<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('user_episode_watch', function (Blueprint $table) {
    //         $table->id();
    //         $table->int("count");
    //         $table->foreignId("episode_id")->constrained()->onDelete("cascade");
    //         $table->foreignId("user_id")->constrained()->onDelete("cascade");
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('user_episode_watch');
    // }
};
