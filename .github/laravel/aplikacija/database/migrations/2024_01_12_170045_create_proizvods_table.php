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
        Schema::create('proizvods', function (Blueprint $table) {
            $table->id();
            $table->string('naziv_proizvoda');
            $table->decimal('cena', 8, 2);
            $table->text('opis');
            $table->unsignedBigInteger('kategorija_id');
            $table->string('prilozi');
            $table->text('sastojci')->nullable();
            // Spoljni ključ za vezu sa tabelom Kategorija
            $table->foreign('kategorija_id')->references('id')->on('kategorijas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proizvods');
    }
};
