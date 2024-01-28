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
        Schema::create('narudbina_proizvods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('narudzbina_id');
            $table->unsignedBigInteger('proizvod_id');
            $table->integer('kolicina');
            $table->timestamps();

            // Spoljni ključevi za vezu sa tabelama Narudzbina i Proizvod
            $table->foreign('narudzbina_id')->references('id')->on('narudzbinas')->onDelete('cascade');
            $table->foreign('proizvod_id')->references('id')->on('proizvods')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('narudbina_proizvods');
    }
};
