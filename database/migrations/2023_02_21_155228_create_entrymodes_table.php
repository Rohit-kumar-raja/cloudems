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
        Schema::create('entrymodes', function (Blueprint $table) {
            $table->id();
            $table->string('entry_modename');
            $table->string('crdr', 10);
            $table->integer('entrymodeno');
            $table->unique(['entry_modename']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrymodes');
    }
};
