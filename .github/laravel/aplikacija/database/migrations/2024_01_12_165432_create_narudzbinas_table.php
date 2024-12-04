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
        Schema::create('narudzbinas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');     
            $table->unsignedBigInteger('restoran_id');     
            $table->text('napomena');
            $table->enum('status', ['obradjeno', 'neobradjeno', 'potvrdjeno', 'isporuceno'])
            ->default('neobradjeno')
            ->nullable(false);      
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');     
            $table->foreign('restoran_id')->references('id')->on('restorans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('narudzbinas');
    }
};
