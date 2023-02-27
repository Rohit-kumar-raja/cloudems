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
        Schema::create('financialtrans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('moduleid');
            $table->unsignedBigInteger('tranid');
            $table->double('amount');
            $table->string('crdr', 10);
            $table->string('acadYear');
            $table->integer('entry_mode');
            $table->integer('voucherno');
            $table->unsignedBigInteger('brid');
            $table->integer('type_of_concession');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financialtrans');
    }
};
