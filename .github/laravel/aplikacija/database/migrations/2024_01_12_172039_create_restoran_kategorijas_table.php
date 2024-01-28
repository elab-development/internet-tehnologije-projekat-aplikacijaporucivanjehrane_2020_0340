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
        Schema::create('restoran_kategorijas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restoran_id');
            $table->unsignedBigInteger('kategorija_id');
            $table->timestamps();

            $table->foreign('restoran_id')->references('id')->on('restorans')->onDelete('cascade');
            $table->foreign('kategorija_id')->references('id')->on('kategorijas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restoran_kategorijas');
    }
};
