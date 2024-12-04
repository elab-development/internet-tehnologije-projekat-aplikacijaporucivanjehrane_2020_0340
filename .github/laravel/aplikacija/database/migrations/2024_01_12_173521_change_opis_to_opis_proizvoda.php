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
        Schema::table('proizvods', function (Blueprint $table) {
            $table->renameColumn('opis', 'opis_proizvoda');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proizvods', function (Blueprint $table) {
            $table->renameColumn('opis_proizvoda', 'opis');
        });
    }
};
