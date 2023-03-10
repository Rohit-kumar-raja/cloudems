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
        Schema::create('feecollectiontypes', function (Blueprint $table) {
            $table->id();
            $table->string('collectionhead')->unique();
            $table->string('collectiondesc');
            $table->unsignedBigInteger('br_id');
            $table->foreign('br_id')->references('id')->on('branches_faculties');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feecollectiontypes');
    }
};
