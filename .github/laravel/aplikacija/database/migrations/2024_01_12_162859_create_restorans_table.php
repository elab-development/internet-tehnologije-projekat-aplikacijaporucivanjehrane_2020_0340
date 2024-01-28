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
        Schema::create('restorans', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('adresa');
            $table->text('opis')->nullable();
            $table->decimal('ocena', 4, 2)->default(0.00); //4 - ukupan broj cifara, 2 - broj decimala koji su sacuvani u koloni
            $table->string('email');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('restorans');
    }
};
