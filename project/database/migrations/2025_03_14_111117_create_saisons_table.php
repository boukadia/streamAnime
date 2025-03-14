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
        Schema::create('saisons', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->text("posterLink");
            $table->string("description");
            $table->integer("saisonNumber");
            $table->date("yearCreation");
            $table->date("yearFin");
            $table->string("trailer");
            $table->foreignId("anime_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saisons');
    }
};
